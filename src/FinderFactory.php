<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserAdapter;
use Arquivei\XML\Tag\Finder\Entities\Xml;

class FinderFactory
{
    public function create(string $xml)
    {
        return new Finder(
            (new Xml())->setContent($xml),
            new XmlParserAdapter()
        );
    }
}
