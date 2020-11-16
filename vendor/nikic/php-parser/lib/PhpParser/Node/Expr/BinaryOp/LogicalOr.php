<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\BinaryOp
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
