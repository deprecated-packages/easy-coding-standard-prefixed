<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp
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
