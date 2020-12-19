<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp;
class NotIdentical extends \_PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp
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
