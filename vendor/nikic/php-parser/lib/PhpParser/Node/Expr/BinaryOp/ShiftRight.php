<?php

declare (strict_types=1);
namespace _PhpScoper56c9df53a081\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper56c9df53a081\PhpParser\Node\Expr\BinaryOp;
class ShiftRight extends \_PhpScoper56c9df53a081\PhpParser\Node\Expr\BinaryOp
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
