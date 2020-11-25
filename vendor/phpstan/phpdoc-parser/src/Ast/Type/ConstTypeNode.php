<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
