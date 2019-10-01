<?php

namespace Arquivei\XML\Tag\Finder;

use Arquivei\XML\Tag\Finder\Adapters\XmlParserAdapter;
use Arquivei\XML\Tag\Finder\Entities\Attribute;
use Arquivei\XML\Tag\Finder\Entities\Tag;

class FinderFactory
{
    private $xml;
    private $parserAdapter;
    private $tags;
    private $attribute;

    public function __construct(
        string $xml,
        XmlParserAdapter $parserAdapter

    ) {
        $this->parserAdapter = $parserAdapter;
        $this->xml = $xml;

    }

    public function getTag(string $tag): Tag
    {
        return (new FindTag($this->xml, $this->parserAdapter))->getTag($tag);
    }

    public function getAttribute(string $tag, string $attribute): Attribute
    {
        return (new FindAttribute($this->xml, $this->parserAdapter))
            ->getAttribute(
                $tag,
                $attribute
            );
    }
}
