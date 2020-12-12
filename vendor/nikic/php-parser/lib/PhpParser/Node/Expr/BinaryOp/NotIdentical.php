<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper326bba7310a2\PhpParser\Node\Expr\BinaryOp;
class NotIdentical extends \_PhpScoper326bba7310a2\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!==';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotIdentical';
    }
}
