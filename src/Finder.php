<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\xmlParserInterface;
use Arquivei\XML\Tag\Finder\Entities\Attribute;
use Arquivei\XML\Tag\Finder\Entities\Tag;
use Arquivei\XML\Tag\Finder\Entities\Xml;
use Arquivei\XML\Tag\Finder\Exceptions\AttributeNotFoundException;
use Arquivei\XML\Tag\Finder\Exceptions\TagOrValueNotFoundException;
use Arquivei\XML\Tag\Finder\Validators\CheckIfReturnIsNullValidator;

final class Finder
{
    private $tag;
    private $attribute;
    private $xmlParser;
    private $xml;

    public function __construct(Xml $xml, xmlParserInterface $xmlParser)
    {
        $this->xml = $xml;
        $this->xmlParser = $xmlParser;
    }

    public function getTag(string $tag): Finder
    {
        $this->tag = $tag;
        return $this;
    }

    public function getAttribute(string $attribute): Finder
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function find()
    {
        if (isset($this->attribute)) {
            try {
                return (new Attribute())
                    ->setName($this->tag . '/' . $this->attribute)
                    ->setValue($this->xmlParser->getAttribute($this->xml, $this->tag, $this->attribute));
            } catch (\Exception $exception) {
                throw (new AttributeNotFoundException())->setName($this->tag . '/' . $this->attribute);
            }
        }

        $validate = (new CheckIfReturnIsNullValidator($this->xmlParser->getTag($this->xml, $this->tag)))->validate();

        if ($validate) {
            throw (new TagOrValueNotFoundException())->setKey($this->tag);
        }

        return (new Tag())
            ->setKey($this->tag)
            ->setValue($this->xmlParser->getTag($this->xml, $this->tag));
    }
}
