<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprFloatNode implements \_PhpScoper2b44cb0c30af\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
