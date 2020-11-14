<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper229e8121cf9f\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
