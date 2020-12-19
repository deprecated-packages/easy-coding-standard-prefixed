<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseAnd';
    }
}
