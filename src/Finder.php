<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserInterface;
use Arquivei\XML\Tag\Finder\Entities\Attribute;
use Arquivei\XML\Tag\Finder\Entities\Tag;
use Arquivei\XML\Tag\Finder\Entities\Xml;

final class Finder
{
    private $tag;
    private $attribute;
    private $xmlParser;
    private $xml;

    public function __construct(Xml $xml, XmlParserInterface $xmlParser)
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
            return (new Attribute())
                ->setName($this->tag . '/' . $this->attribute)
                ->setValue($this->xmlParser->getAttribute($this->xml, $this->tag, $this->attribute));
        }

        return (new Tag())
            ->setKey($this->tag)
            ->setValue($this->xmlParser->getTag($this->xml, $this->tag));
    }
}
