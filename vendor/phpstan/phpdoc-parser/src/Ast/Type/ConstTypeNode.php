<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
