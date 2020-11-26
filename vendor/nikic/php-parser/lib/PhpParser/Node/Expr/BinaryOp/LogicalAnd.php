<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper167729fa1dde\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoper167729fa1dde\PhpParser\Node\Expr\BinaryOp
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
