<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper89c09b8e7101\PhpParser\Node\Expr\BinaryOp;
class ShiftRight extends \_PhpScoper89c09b8e7101\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftRight';
    }
}
