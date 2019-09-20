<?php

namespace Arquivei\XML\Tag\Finder;

class Finder
{
    private $parser;
    private $xml;
    private $root;
    private $values = array();

    public function __construct(string $xml)
    {
        $this->parser = new \Jitesoft\XML\Parser();
        $this->xml = $xml;
        $this->root = null;
    }

    public function find(array $tags = [0 => 'infNFe.Id', 1 => 'infNFe/dest/xNome'])
    {
        $this->root = $this->parser->parse($this->xml);
        foreach ($tags as $tag) {
            $nfeValues = $this->root;
            $tagsArray = explode('/', $tag);
            foreach ($tagsArray as $field) {
                $addAttribute = null;
                $attribute = explode('.', $field);
                if (count($attribute) > 1) {
                    $nfeValues = $nfeValues->getChildByName($attribute[0]);
                    $addAttribute = $nfeValues->getAttribute($attribute[1]);
                }
                if (count($attribute) <= 1) {
                    $nfeValues = $nfeValues->getChildByName($field);
                }
            }
            if (!is_null($addAttribute)) {
                $this->values[$tag] = $addAttribute;
            }
            if (is_null($addAttribute)) {
                $this->values[$tag] = (!is_null($nfeValues->getContent()) ? $nfeValues->getContent() : 'all');
            }
        }
    }
}
