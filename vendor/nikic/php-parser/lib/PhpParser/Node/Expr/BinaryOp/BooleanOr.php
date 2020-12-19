<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera6f918786d5c\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScopera6f918786d5c\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '||';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
