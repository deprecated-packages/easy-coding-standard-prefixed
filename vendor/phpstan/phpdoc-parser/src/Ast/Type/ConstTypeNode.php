<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PHPStan\PhpDocParser\Ast\Type;

use _PhpScopera88a8b9f064a\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScopera88a8b9f064a\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScopera88a8b9f064a\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
