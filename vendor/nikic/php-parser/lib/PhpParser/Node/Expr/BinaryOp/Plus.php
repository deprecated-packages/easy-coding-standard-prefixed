<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper0c236037eb04\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper0c236037eb04\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '+';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
