<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper9d73a84b09ad\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScoper9d73a84b09ad\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '.';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Concat';
    }
}
