<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Arquivei\XML\Tag\Finder\Entities\Xml;
use Jitesoft\XML\Parser;

class XmlParserAdapter implements XmlParserInterface
{
    private $xmlParser;
    private $xmlTreeNode;

    public function parse(string $xml): XmlParserAdapter
    {
        $this->xmlParser = new Parser();
        $this->xmlTreeNode = $this->xmlParser->parse($xml);
        return $this;
    }

    public function getAttribute(Xml $xml, string $tag, string $attribute): string
    {
        $this->parse($xml->getContent());

        $tagArray = explode('/', $tag);
        foreach ($tagArray as $value) {
            $this->xmlTreeNode = $this->xmlTreeNode->getChildByName($value);
        }

        return $this->xmlTreeNode->getAttribute($attribute);
    }

    public function getTag(Xml $xml, string $tag): string
    {
        $this->parse($xml->getContent());

        $tagArray = explode('/', $tag);
        foreach ($tagArray as $value) {
            $this->xmlTreeNode = $this->xmlTreeNode->getChildByName($value);
        }

        return $this->xmlTreeNode->getContent();
    }
}
