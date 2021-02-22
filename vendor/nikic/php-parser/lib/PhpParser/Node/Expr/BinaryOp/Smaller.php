<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper10b1b2c5ca55\PhpParser\Node\Expr\BinaryOp;
class Smaller extends \_PhpScoper10b1b2c5ca55\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Smaller';
    }
}
