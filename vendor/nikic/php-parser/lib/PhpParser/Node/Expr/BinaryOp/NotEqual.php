<?php

declare (strict_types=1);
namespace _PhpScoper069ebd53a518\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper069ebd53a518\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper069ebd53a518\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotEqual';
    }
}
