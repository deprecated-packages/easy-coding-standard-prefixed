<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
