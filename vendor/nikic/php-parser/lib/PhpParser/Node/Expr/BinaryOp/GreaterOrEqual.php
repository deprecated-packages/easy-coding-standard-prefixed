<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper83b3b9a317c0\PhpParser\Node\Expr\BinaryOp;
class GreaterOrEqual extends \_PhpScoper83b3b9a317c0\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_GreaterOrEqual';
    }
}
