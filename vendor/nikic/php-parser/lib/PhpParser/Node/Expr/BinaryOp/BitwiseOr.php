<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb26833cc184d\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoperb26833cc184d\PhpParser\Node\Expr\BinaryOp
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
