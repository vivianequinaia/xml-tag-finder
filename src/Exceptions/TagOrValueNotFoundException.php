<?php

namespace Arquivei\XML\Tag\Finder\Exceptions;

use Throwable;

class TagOrValueNotFoundException extends \Exception
{
    private $key;

    public function __construct(
        $message = "The tag or value searched was not found.",
        Throwable $previous = null,
        $code = 00001
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): TagOrValueNotFoundException
    {
        $this->key = $key;
        return $this;
    }
}
