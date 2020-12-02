<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode[] */
    public $types;
    public function __construct(array $types)
    {
        $this->types = $types;
    }
    public function __toString() : string
    {
        return '(' . \implode(' & ', $this->types) . ')';
    }
}
