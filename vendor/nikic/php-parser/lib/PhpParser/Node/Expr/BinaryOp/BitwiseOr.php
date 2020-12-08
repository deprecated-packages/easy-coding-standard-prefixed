<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf053e888b664\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoperf053e888b664\PhpParser\Node\Expr\BinaryOp
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
