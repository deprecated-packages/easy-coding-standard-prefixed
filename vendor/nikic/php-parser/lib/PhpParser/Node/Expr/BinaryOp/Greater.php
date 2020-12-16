<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc75fd40d7a6e\PhpParser\Node\Expr\BinaryOp;
class Greater extends \_PhpScoperc75fd40d7a6e\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Greater';
    }
}
