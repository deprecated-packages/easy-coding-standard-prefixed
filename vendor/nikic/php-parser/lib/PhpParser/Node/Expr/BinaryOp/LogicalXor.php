<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\BinaryOp
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
