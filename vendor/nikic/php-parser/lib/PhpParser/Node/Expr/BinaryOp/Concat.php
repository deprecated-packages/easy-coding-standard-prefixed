<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\BinaryOp
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
