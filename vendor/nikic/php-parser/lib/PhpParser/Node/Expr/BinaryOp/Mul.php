<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6db4fde00cda\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoper6db4fde00cda\PhpParser\Node\Expr\BinaryOp
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
