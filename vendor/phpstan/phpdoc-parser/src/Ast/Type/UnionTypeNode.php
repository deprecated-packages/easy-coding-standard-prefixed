<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper21763e6c7ac4\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
