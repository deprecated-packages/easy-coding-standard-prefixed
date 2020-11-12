<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\BinaryOp
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
