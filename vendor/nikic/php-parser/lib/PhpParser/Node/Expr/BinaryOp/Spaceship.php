<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb458b528613f\PhpParser\Node\Expr\BinaryOp;
class Spaceship extends \_PhpScoperb458b528613f\PhpParser\Node\Expr\BinaryOp
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
