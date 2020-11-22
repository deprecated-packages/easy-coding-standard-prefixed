<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf3db63c305b2\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoperf3db63c305b2\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseAnd';
    }
}
