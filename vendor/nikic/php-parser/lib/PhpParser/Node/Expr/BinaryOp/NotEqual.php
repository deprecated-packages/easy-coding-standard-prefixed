<?php

declare (strict_types=1);
namespace _PhpScoperf62d28230928\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf62d28230928\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoperf62d28230928\PhpParser\Node\Expr\BinaryOp
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
