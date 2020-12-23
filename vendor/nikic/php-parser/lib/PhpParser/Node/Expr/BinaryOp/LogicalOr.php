<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper14cb6de5473d\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\BinaryOp
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
