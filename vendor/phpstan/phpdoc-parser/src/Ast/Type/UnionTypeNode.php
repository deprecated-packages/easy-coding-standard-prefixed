<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
