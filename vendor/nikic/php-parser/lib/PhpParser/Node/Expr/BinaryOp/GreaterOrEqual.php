<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp;
class GreaterOrEqual extends \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp
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
