<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperbd5c5a045153\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotEqual';
    }
}
