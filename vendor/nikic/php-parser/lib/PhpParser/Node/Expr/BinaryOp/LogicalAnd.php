<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfcee700af3df\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperfcee700af3df\PhpParser\Node\Expr\BinaryOp
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
