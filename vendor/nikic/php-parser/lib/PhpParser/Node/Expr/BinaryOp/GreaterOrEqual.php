<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\BinaryOp;
class GreaterOrEqual extends \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_GreaterOrEqual';
    }
}
