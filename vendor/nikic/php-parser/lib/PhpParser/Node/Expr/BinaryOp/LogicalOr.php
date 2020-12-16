<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb6a8e65b492c\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperb6a8e65b492c\PhpParser\Node\Expr\BinaryOp
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
