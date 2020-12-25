<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper92597f5b42a7\PhpParser\Node\Expr\BinaryOp;
class Pow extends \_PhpScoper92597f5b42a7\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '**';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Pow';
    }
}
