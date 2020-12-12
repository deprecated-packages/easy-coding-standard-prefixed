<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82\PHPStan\PhpDocParser\Ast\Type;

class UnionTypeNode implements \_PhpScoper3e7ab659bd82\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
