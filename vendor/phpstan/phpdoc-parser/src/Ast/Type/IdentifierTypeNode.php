<?php

declare (strict_types=1);
namespace _PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
