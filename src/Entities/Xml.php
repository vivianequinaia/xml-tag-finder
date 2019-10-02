<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class Xml
{
    private $nfe;

    public function __construct(string $nfe)
    {
        $this->nfe = $nfe;
    }

    public function getNfe(): string
    {
        return $this->nfe;
    }
}
