<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode[] */
    public $types;
    public function __construct(array $types)
    {
        $this->types = $types;
    }
    public function __toString() : string
    {
        return '(' . \implode(' | ', $this->types) . ')';
    }
}
