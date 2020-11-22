<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4cd05b62e9f1\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper4cd05b62e9f1\PhpParser\Node\Expr\BinaryOp
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
