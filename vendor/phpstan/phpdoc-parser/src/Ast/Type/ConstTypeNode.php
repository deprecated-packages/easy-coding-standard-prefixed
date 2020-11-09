<?php

declare (strict_types=1);
namespace _PhpScoper880bfa4d8b51\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper880bfa4d8b51\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper880bfa4d8b51\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper880bfa4d8b51\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
