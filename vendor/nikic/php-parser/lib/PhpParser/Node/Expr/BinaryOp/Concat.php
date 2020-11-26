<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb2e2c0c42e71\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScoperb2e2c0c42e71\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '.';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Concat';
    }
}
