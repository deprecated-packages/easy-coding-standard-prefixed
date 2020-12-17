<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoperfa7254c25e18\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
