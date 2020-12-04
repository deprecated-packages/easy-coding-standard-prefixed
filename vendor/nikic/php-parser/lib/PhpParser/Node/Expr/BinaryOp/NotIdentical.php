<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera04bf8e97c06\PhpParser\Node\Expr\BinaryOp;
class NotIdentical extends \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!==';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotIdentical';
    }
}
