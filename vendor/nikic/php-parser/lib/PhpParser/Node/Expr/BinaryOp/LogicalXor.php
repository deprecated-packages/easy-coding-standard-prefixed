<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperef5048aa2573\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperef5048aa2573\PhpParser\Node\Expr\BinaryOp
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
