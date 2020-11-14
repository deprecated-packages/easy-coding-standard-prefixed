<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\BinaryOp
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
