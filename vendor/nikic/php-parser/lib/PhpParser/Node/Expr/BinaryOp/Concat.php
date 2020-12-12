<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper11a6395266c4\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScoper11a6395266c4\PhpParser\Node\Expr\BinaryOp
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
