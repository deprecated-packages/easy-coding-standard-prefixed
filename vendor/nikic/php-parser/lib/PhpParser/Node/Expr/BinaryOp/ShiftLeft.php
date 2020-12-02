<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfaaf57618f34\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftLeft';
    }
}
