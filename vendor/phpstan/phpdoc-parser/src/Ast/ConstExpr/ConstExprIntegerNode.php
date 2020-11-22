<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprIntegerNode implements \_PhpScoper6db4fde00cda\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    /** @var string */
    public $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
