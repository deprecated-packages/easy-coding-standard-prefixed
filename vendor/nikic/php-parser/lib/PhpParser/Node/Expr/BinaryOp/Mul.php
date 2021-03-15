<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper64e7ad844899\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoper64e7ad844899\PhpParser\Node\Expr\BinaryOp
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
