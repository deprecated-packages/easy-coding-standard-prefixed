<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8a05d21c15c9\PhpParser\Node\Expr\BinaryOp;
class Greater extends \_PhpScoper8a05d21c15c9\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Greater';
    }
}
