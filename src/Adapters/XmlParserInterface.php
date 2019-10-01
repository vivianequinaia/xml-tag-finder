<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Jitesoft\XML\Node;

interface XmlParserInterface
{
    public function parse(string $xml): Node;

    public function getChildByName(string $tagKey): Node;

    public function getAttribute(string $attribute): string;

    public function getContent(): string;
}
