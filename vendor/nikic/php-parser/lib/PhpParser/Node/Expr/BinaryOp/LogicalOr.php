<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper58a0a169dcfb\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper58a0a169dcfb\PhpParser\Node\Expr\BinaryOp
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
