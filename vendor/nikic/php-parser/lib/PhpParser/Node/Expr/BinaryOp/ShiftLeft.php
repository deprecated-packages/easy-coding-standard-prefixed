<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper66292c14b658\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScoper66292c14b658\PhpParser\Node\Expr\BinaryOp
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
