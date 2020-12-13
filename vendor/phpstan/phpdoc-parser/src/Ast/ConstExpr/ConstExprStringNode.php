<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprStringNode implements \_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
