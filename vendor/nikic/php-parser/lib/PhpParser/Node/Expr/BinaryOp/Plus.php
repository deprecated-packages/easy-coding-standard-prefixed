<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdeea1786e972\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoperdeea1786e972\PhpParser\Node\Expr\BinaryOp
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
