<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'or';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
