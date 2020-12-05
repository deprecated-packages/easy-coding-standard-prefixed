<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\BinaryOp
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
