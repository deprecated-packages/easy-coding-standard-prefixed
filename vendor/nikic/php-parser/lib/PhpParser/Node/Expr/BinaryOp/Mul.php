<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper3e8786a75afe\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoper3e8786a75afe\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '*';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mul';
    }
}
