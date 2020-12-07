<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperda2604e33acb\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperda2604e33acb\PhpParser\Node\Expr\BinaryOp
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
