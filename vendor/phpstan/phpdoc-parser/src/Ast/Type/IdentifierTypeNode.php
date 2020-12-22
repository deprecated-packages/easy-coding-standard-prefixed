<?php

declare (strict_types=1);
namespace _PhpScoper5813f9b171f8\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper5813f9b171f8\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
