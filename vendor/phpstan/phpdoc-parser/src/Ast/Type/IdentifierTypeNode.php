<?php

declare (strict_types=1);
namespace _PhpScoper2637e9a72c68\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper2637e9a72c68\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
