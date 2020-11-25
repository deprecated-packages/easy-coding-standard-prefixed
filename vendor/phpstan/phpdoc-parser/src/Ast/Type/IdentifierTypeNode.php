<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
