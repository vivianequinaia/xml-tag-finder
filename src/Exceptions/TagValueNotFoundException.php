<?php

namespace Arquivei\XML\Tag\Finder\Exceptions;

use Throwable;

class TagValueNotFoundException extends \Exception
{
    private $key;

    public function __construct(
        $message = "This tag value was not found.",
        Throwable $previous = null,
        $code = 00003
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): TagValueNotFoundException
    {
        $this->key = $key;
        return $this;
    }
}
