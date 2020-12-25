<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc8fea59b0cb1\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperc8fea59b0cb1\PhpParser\Node\Expr\BinaryOp
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
