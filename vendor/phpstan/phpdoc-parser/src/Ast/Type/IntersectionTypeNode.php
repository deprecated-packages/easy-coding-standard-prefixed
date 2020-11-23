<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScopere341acab57d4\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
