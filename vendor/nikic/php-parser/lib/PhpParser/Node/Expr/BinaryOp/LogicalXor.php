<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp
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
