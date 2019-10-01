<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserAdapter;
use Arquivei\XML\Tag\Finder\Dependencies\LogInterface;

abstract class Finder
{
    private $xml;
    private $logger;
    private $parserAdapter;

    public function __construct(
        string $xml,
        XmlParserAdapter $parserAdapter
    ) {
        $this->parserAdapter = $parserAdapter;
        $this->xml = $xml;
    }

    abstract public function find(string $tags);
}
