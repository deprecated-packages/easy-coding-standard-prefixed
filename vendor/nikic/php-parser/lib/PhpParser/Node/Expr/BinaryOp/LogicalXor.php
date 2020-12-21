<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb730595bc9f4\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperb730595bc9f4\PhpParser\Node\Expr\BinaryOp
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
