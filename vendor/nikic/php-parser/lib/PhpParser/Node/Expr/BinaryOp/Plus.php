<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper04022cd986ec\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper04022cd986ec\PhpParser\Node\Expr\BinaryOp
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
