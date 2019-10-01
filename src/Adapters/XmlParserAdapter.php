<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Jitesoft\XML\Node;
use Jitesoft\XML\Parser;

class XmlParserAdapter implements XmlParserInterface
{
    private $xmlParser;
    private $xmlTreeNode;

    public function __construct(Parser $xmlParser)
    {
        $this->xmlParser = $xmlParser;
    }

    public function parse(string $xml): Node
    {
        return $this->xmlParser->parse($xml);
    }

    public function getChildByName(string $tagKey): Node
    {
        return $this->xmlTreeNode->getChildByName($tagKey);
    }

    public function getAttribute(string $attribute): string
    {
        return $this->xmlTreeNode->getAttribute($attribute);
    }

    public function getContent(): string
    {
        return $this->xmlTreeNode->getContent();
    }
}
