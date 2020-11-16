<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScopera9d6b451df71\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
