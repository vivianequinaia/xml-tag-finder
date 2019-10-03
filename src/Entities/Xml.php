<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class Xml
{
    private $content;

    public function setContent(string $content): Xml
    {
        $this->content = $content;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
