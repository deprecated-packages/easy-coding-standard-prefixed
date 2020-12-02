<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper992f4af8b9e0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper992f4af8b9e0\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper992f4af8b9e0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
