<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper246d7c16d32f\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper246d7c16d32f\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '+';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
