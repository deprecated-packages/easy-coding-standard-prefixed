<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\BinaryOp
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
