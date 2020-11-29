<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper9d73a84b09ad\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
