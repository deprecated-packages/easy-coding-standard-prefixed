<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '^';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseXor';
    }
}
