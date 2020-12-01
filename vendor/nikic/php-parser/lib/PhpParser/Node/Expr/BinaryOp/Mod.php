<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb36402634947\PhpParser\Node\Expr\BinaryOp;
class Mod extends \_PhpScoperb36402634947\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '%';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mod';
    }
}
