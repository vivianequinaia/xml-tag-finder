<?php

namespace Arquivei\XML\Tag\Finder\Adapters;

use Jitesoft\XML\Node;
use Jitesoft\XML\ParserInterface;

class XmlParserAdapter implements XmlParserInterface
{
    private $xmlParser;
    private $xmlTreeNode;
    private $parser;

    public function __construct(ParserInterface $xmlParser)
    {
        $this->xmlParser = $xmlParser;
    }

    public function parse(string $xml): Node
    {
        $this->parser = clone $this->xmlParser;
        return $this->parser->parse($xml);
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
