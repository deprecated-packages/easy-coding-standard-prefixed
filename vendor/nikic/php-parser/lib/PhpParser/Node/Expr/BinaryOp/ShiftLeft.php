<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper28ab463fc3ba\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScoper28ab463fc3ba\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftLeft';
    }
}
