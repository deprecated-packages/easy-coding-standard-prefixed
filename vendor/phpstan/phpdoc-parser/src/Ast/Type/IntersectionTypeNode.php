<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper78af57a363a0\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
