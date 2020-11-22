<?php

declare (strict_types=1);
namespace _PhpScoper16399a42e87c\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprIntegerNode implements \_PhpScoper16399a42e87c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
