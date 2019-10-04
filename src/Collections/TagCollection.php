<?php

namespace Arquivei\XML\Tag\Finder\Collections;

use Arquivei\XML\Tag\Finder\Entities\Tag;

class TagCollection
{
    private $collector = [];

    public function add(Tag $tag): void
    {
        $this->collector[] = $tag;
    }

    public function all(): array
    {
        return $this->collector;
    }
}
