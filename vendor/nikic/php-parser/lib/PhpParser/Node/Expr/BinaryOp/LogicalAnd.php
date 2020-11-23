<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc4b135661b3a\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperc4b135661b3a\PhpParser\Node\Expr\BinaryOp
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
