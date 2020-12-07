<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper89ec3c69e67d\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
