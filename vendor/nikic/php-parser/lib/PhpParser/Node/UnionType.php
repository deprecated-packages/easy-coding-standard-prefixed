<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node;

use _PhpScopera09818bc50da\PhpParser\NodeAbstract;
class UnionType extends \_PhpScopera09818bc50da\PhpParser\NodeAbstract
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
