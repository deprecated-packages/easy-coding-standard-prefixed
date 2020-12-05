<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper81b3ff5ab9fe\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
