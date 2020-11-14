<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PHPStan\PhpDocParser\Ast\Type;

class IdentifierTypeNode implements \_PhpScopercda2b863d098\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
