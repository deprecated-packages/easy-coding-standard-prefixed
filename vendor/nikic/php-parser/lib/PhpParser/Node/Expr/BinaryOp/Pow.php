<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc83f84c90b60\PhpParser\Node\Expr\BinaryOp;
class Pow extends \_PhpScoperc83f84c90b60\PhpParser\Node\Expr\BinaryOp
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
