<?php

declare (strict_types=1);
namespace _PhpScoper9885c8c176c7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper9885c8c176c7\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper9885c8c176c7\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
