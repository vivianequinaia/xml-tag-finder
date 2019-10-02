<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Arquivei\XML\Tag\Finder\Entities\Xml;

interface XmlParserInterface
{
    public function parse(string $xml): XmlParserAdapter;

    public function getAttribute(Xml $xml, string $tag, string $attribute): ?string;

    public function getTag(Xml $xml, string $tag): ?string;
}
