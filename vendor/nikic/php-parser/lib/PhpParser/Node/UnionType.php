<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\Node;

use _PhpScoper326af2119eba\PhpParser\NodeAbstract;
class UnionType extends \_PhpScoper326af2119eba\PhpParser\NodeAbstract
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
