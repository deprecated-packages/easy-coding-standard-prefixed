<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoperfacc742d2745\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
