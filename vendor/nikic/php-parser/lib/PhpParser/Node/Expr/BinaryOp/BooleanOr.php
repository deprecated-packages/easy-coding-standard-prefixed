<?php

declare (strict_types=1);
namespace _PhpScoper5813f9b171f8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5813f9b171f8\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoper5813f9b171f8\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '||';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
