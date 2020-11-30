<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera09818bc50da\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScopera09818bc50da\PhpParser\Node\Expr\BinaryOp
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
