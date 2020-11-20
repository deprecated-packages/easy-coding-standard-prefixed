<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\BinaryOp
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
