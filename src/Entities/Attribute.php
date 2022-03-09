<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class Attribute
{
    private $name;
    private $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Attribute
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Attribute
    {
        $this->value = $value;
        return $this;
    }
}
