<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '*';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mul';
    }
}
