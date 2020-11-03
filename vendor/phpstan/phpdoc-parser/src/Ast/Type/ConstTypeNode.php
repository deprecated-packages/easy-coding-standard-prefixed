<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5\PHPStan\PhpDocParser\Ast\Type;

use _PhpScopercf327c47dfc5\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScopercf327c47dfc5\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScopercf327c47dfc5\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
