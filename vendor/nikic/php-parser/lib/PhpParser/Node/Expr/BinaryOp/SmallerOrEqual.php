<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfcf15c26e033\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\BinaryOp
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
