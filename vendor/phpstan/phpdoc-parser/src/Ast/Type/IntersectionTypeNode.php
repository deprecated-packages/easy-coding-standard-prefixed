<?php

declare (strict_types=1);
namespace _PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper7108c819f5c5\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
