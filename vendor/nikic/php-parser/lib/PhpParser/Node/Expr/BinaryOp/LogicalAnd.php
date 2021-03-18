<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'and';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}
