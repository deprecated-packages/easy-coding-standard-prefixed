<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoperd8b12759ee0d\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_SmallerOrEqual';
    }
}
