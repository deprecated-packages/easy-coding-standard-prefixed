<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\BinaryOp
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
