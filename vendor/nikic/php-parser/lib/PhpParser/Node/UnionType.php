<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node;

use _PhpScoper578a67c80b2b\PhpParser\NodeAbstract;
class UnionType extends \_PhpScoper578a67c80b2b\PhpParser\NodeAbstract
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
