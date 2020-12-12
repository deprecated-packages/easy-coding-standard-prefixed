<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperef870243cfdb\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoperef870243cfdb\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '^';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseXor';
    }
}
