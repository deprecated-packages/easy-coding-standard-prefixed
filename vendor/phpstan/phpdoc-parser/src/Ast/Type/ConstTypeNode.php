<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
