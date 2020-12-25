<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoper7c1f54fd2f3a\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
