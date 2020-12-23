<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperd9fcac9e904f\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperd9fcac9e904f\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperd9fcac9e904f\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
