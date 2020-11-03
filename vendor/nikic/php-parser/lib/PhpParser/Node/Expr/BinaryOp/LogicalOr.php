<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper83a475a0590e\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper83a475a0590e\PhpParser\Node\Expr\BinaryOp
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
