<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScoperc75fd40d7a6e\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
