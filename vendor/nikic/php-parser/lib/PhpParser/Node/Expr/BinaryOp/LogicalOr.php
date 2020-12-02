<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper992f4af8b9e0\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper992f4af8b9e0\PhpParser\Node\Expr\BinaryOp
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
