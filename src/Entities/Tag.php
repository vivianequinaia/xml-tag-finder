<?php

namespace Arquivei\XML\Tag\Finder\Entities;

use Arquivei\XML\Tag\Finder\FindAttribute;

class Tag
{
    private $key;
    private $value;

    public function setKey(string $key): Tag
    {
        $this->key = $key;
        return $this;
    }

    public function setValue(?string $value): Tag
    {
        $this->value = $value;
        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
