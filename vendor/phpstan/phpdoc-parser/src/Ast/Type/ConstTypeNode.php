<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
