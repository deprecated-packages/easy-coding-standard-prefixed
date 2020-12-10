<?php

declare (strict_types=1);
namespace _PhpScoper8dd2e1c340b1\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper8dd2e1c340b1\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper8dd2e1c340b1\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper8dd2e1c340b1\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
