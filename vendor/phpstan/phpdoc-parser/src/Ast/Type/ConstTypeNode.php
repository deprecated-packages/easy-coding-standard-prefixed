<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper83b3b9a317c0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
