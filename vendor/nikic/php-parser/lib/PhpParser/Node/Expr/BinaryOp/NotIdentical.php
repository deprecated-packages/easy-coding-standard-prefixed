<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\Node\Expr\BinaryOp;

use _PhpScopere4fa57261c04\PhpParser\Node\Expr\BinaryOp;
class NotIdentical extends \_PhpScopere4fa57261c04\PhpParser\Node\Expr\BinaryOp
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
