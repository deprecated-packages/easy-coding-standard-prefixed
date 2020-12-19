<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper065e4ba46e6d\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper065e4ba46e6d\PhpParser\Node\Expr\BinaryOp
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
