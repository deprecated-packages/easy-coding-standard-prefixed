<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper59ccd3f8e121\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
