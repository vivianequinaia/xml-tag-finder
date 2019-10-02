<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserInterface;

abstract class Finder
{
    private $xml;
    private $parserAdapter;

    public function __construct(
        string $xml,
        XmlParserInterface $parserAdapter
    ) {
        $this->parserAdapter = $parserAdapter;
        $this->xml = $xml;
    }

    abstract public function find(string $tags, string $attribute = null);
}
