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
    private $xmlParserInterface;
    private $xml;

    public function __construct(Xml $xml, XmlParserInterface $xmlParserInterface)
    {
        $this->xml = $xml;
        $this->xmlParserInterface = $xmlParserInterface;
    }

    public function getTag(string $tag)
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
        if(isset($this->attribute)) {
            return (new Attribute())
                ->setName($this->tag . '/' . $this->attribute)
                ->setValue($this->xmlParserInterface->getAttribute($this->xml, $this->tag, $this->attribute));
        }

        return (new Tag())
            ->setKey($this->tag)
            ->setValue($this->xmlParserInterface->getTag($this->xml, $this->tag));
    }
}
