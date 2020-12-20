<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper57210e33e43a\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper57210e33e43a\PhpParser\Node\Expr\BinaryOp
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
