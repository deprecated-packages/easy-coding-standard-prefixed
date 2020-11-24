<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_SmallerOrEqual';
    }
}
