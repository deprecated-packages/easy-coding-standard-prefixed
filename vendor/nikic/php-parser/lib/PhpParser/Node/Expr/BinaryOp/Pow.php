<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper1103e00fb46b\PhpParser\Node\Expr\BinaryOp;
class Pow extends \_PhpScoper1103e00fb46b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '**';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Pow';
    }
}
