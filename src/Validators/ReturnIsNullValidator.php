<?php

namespace Arquivei\XML\Tag\Finder\Validators;

class ReturnIsNullValidator
{
    private $return;

    public function __construct(?string $return)
    {
        $this->return = $return;
    }

    public function validate()
    {
        if (is_null($this->return)) {
            return true;
        }

        return false;
    }
}
