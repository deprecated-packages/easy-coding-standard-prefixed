<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Node\Expr\BinaryOp;

use _PhpScopercb576ca159b5\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScopercb576ca159b5\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '|';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseOr';
    }
}
