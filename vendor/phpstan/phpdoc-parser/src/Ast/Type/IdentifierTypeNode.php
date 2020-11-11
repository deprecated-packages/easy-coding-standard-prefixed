<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper4f985154d5a0\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
