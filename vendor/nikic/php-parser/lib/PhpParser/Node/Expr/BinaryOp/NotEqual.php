<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper246d3630afdd\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper246d3630afdd\PhpParser\Node\Expr\BinaryOp
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
