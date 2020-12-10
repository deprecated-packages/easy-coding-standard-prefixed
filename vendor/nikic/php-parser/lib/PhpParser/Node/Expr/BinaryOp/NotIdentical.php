<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper9ef667a5e42c\PhpParser\Node\Expr\BinaryOp;
class NotIdentical extends \_PhpScoper9ef667a5e42c\PhpParser\Node\Expr\BinaryOp
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
