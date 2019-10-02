<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserInterface;
use Arquivei\XML\Tag\Finder\Entities\Attribute;
use Arquivei\XML\Tag\Finder\Entities\Tag;

final class FinderFactory
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

    public function getTag(string $tag): Tag
    {
        return (new FindTag($this->xml, $this->parserAdapter))->find($tag);
    }

    public function getAttribute(string $tag, string $attribute): Attribute
    {
        return (new FindAttribute($this->xml, $this->parserAdapter))
            ->find(
                $tag,
                $attribute
            );
    }
}
