<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\BinaryOp;
class Spaceship extends \_PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\BinaryOp
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
