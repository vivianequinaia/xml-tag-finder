<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Arquivei\XML\Tag\Finder\Entities\Xml;
use Arquivei\XML\Tag\Finder\Exceptions\AttributeNotFoundException;
use Arquivei\XML\Tag\Finder\Exceptions\TagNotFoundException;
use Arquivei\XML\Tag\Finder\Exceptions\TagValueNotFoundException;
use Arquivei\XML\Tag\Finder\Validators\ReturnIsNullValidator;
use Jitesoft\XML\Parser;

class XmlParserAdapter implements XmlParserInterface
{
    private $xmlParser;
    private $xmlTreeNode;
    private $tagName;

    public function parse(string $xml): XmlParserAdapter
    {
        $this->xmlParser = new Parser();
        $this->xmlTreeNode = $this->xmlParser->parse($xml);
        $this->getName();
        return $this;
    }

    public function getAttribute(Xml $xml, string $tag, string $attribute): ?string
    {
        try {
            $this->parse($xml->getContent());
            $tagArray = explode('/', $tag);
            if ($tagArray[0] !== $this->tagName) {
                unset($tagArray[0]);
                foreach ($tagArray as $value) {
                    $this->xmlTreeNode = $this->xmlTreeNode->getChildByName($value);
                }
            }

            return $this->xmlTreeNode->getAttribute($attribute);
        } catch (\Exception $exception) {
            throw (new AttributeNotFoundException($exception))->setName($tag . '/' . $attribute);
        }
    }

    public function getTag(Xml $xml, string $tag): ?string
    {
        if($tag === $this->tagName) {
            $return = $this->getContent();

            $validate = (new ReturnIsNullValidator($return))->validate();

            if ($validate) {
                throw (new TagValueNotFoundException())->setKey($tag);
            }
            return $return;
        }

        try {
            $this->parse($xml->getContent());

            $tagArray = explode('/', $tag);
            unset($tagArray[0]);
            foreach ($tagArray as $value) {
                $this->xmlTreeNode = $this->xmlTreeNode->getChildByName($value);
            }
            $return = $this->getContent();
        } catch (\Exception $exception) {

            throw (new TagNotFoundException($exception))->setKey($tag);
        }

        $validate = (new ReturnIsNullValidator($return))->validate();

        if ($validate) {
            throw (new TagValueNotFoundException())->setKey($tag);
        }

        return $return;
    }

    public function getName()
    {
        $this->tagName = $this->xmlTreeNode->getName();
    }

    public function getContent(): ?string
    {
        return $this->xmlTreeNode->getContent();
    }
}
