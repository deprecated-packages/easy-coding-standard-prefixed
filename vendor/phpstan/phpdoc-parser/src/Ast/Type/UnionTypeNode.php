<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
