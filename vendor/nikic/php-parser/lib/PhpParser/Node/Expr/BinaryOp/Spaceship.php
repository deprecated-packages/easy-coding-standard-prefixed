<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\BinaryOp;
class Spaceship extends \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Spaceship';
    }
}
