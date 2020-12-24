<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScopera37d6fb0b1ab\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var string */
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function __toString() : string
    {
        return $this->name;
    }
}
