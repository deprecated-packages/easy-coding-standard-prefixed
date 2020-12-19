<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp
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
