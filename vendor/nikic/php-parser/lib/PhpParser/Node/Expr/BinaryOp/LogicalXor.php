<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'xor';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalXor';
    }
}
