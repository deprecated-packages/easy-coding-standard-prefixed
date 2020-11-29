<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser\Node\Expr\BinaryOp;

use _PhpScopercae980ebf12d\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScopercae980ebf12d\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotEqual';
    }
}
