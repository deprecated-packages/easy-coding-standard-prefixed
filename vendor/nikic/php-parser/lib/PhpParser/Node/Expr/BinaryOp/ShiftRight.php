<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\BinaryOp;
class ShiftRight extends \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\BinaryOp
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
