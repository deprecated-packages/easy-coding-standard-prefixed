<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
