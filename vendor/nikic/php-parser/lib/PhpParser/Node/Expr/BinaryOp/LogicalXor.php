<?php

declare (strict_types=1);
namespace _PhpScoper31ba553edf97\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper31ba553edf97\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper31ba553edf97\PhpParser\Node\Expr\BinaryOp
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
