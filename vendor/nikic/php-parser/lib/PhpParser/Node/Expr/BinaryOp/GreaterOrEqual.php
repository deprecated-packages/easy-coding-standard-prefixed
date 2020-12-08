<?php

declare (strict_types=1);
namespace _PhpScoper5ea36b274140\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5ea36b274140\PhpParser\Node\Expr\BinaryOp;
class GreaterOrEqual extends \_PhpScoper5ea36b274140\PhpParser\Node\Expr\BinaryOp
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
