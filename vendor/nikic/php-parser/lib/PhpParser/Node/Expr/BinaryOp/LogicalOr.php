<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp
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
