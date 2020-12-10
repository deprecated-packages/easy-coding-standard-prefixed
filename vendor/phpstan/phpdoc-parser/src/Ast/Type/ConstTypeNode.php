<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperfab1bfb7ec99\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperfab1bfb7ec99\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperfab1bfb7ec99\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
