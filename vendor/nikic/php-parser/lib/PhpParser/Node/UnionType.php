<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Node;

use _PhpScopera88a8b9f064a\PhpParser\NodeAbstract;
class UnionType extends \_PhpScopera88a8b9f064a\PhpParser\NodeAbstract
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
