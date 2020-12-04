<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera4fc793dae73\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScopera4fc793dae73\PhpParser\Node\Expr\BinaryOp
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
