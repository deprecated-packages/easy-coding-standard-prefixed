<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper06c66bea2cf6\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\BinaryOp
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
