<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'or';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
