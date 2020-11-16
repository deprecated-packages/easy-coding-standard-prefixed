<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\Node;

use _PhpScoperbcc0395698f8\PhpParser\NodeAbstract;
class UnionType extends \_PhpScoperbcc0395698f8\PhpParser\NodeAbstract
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
