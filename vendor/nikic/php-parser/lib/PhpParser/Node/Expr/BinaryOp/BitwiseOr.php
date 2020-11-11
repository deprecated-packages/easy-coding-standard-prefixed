<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper0f5cd390c37a\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '|';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseOr';
    }
}
