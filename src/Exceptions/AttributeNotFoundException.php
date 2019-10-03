<?php

namespace Arquivei\XML\Tag\Finder\Exceptions;

use Throwable;

class AttributeNotFoundException extends \Exception
{
    private $name;

    public function __construct(
        Throwable $previous = null,
        $message = "The tag or attribute or value searched was not found.",
        $code = 00002
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): AttributeNotFoundException
    {
        $this->name = $name;
        return $this;
    }
}
