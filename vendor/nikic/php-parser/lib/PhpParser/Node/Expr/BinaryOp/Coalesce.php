<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
