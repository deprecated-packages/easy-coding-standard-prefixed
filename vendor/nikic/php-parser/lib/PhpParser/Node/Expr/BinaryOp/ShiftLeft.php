<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftLeft';
    }
}
