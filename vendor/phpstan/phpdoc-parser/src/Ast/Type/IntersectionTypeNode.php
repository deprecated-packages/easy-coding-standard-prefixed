<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
