<?php

declare (strict_types=1);
namespace _PhpScoper8751341571b5\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8751341571b5\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper8751341571b5\PhpParser\Node\Expr\BinaryOp
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
