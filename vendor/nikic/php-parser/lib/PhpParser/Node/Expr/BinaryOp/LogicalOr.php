<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd35c27cd4b09\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperd35c27cd4b09\PhpParser\Node\Expr\BinaryOp
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
