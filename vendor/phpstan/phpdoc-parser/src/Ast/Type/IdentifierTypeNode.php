<?php

declare (strict_types=1);
namespace _PhpScoper7145e5e87de5\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper7145e5e87de5\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
