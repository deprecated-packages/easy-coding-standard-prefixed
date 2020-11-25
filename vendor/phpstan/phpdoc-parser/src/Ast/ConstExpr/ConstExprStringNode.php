<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprStringNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
