<?php

declare (strict_types=1);
namespace _PhpScopere205696a9dd6\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScopere205696a9dd6\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
