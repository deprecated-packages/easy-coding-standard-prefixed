<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'or';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
