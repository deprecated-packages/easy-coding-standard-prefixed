<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper06c66bea2cf6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper06c66bea2cf6\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper06c66bea2cf6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
