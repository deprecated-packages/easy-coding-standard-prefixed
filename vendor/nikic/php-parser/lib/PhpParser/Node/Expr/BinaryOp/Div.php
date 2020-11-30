<?php

declare (strict_types=1);
namespace _PhpScoper2637e9a72c68\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper2637e9a72c68\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoper2637e9a72c68\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '/';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Div';
    }
}
