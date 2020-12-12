<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprStringNode implements \_PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
