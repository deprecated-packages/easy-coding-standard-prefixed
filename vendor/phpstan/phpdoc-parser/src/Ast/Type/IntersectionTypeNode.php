<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type;

class IntersectionTypeNode implements \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
