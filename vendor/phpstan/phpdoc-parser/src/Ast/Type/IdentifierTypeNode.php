<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper49c742f5a4ee\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
