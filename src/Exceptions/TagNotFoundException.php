<?php

namespace Arquivei\XML\Tag\Finder\Exceptions;

use Throwable;

class TagNotFoundException extends \Exception
{
    private $key;

    public function __construct(
        Throwable $previous = null,
        $message = "The tag searched was not found.",
        $code = 00001
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): TagNotFoundException
    {
        $this->key = $key;
        return $this;
    }
}
