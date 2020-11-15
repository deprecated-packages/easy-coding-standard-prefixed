<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp
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
