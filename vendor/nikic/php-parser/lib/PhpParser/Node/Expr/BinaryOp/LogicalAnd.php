<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera749ac204cd2\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScopera749ac204cd2\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'and';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}
