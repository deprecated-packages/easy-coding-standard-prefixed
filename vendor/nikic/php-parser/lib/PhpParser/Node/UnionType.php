<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PhpParser\Node;

use _PhpScoperb6a8e65b492c\PhpParser\NodeAbstract;
class UnionType extends \_PhpScoperb6a8e65b492c\PhpParser\NodeAbstract
{
    /** @var (Identifier|Name)[] Types */
    public $types;
    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name)[] $types      Types
     * @param array               $attributes Additional attributes
     */
    public function __construct(array $types, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->types = $types;
    }
    public function getSubNodeNames() : array
    {
        return ['types'];
    }
    public function getType() : string
    {
        return 'UnionType';
    }
}
