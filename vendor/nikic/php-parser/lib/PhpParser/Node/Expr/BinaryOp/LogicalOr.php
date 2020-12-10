<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper3a22e8e0bd94\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper3a22e8e0bd94\PhpParser\Node\Expr\BinaryOp
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
