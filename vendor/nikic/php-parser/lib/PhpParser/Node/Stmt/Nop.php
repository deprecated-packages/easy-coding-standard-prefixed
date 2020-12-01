<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947\PhpParser\Node\Stmt;

use _PhpScoperb36402634947\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb36402634947\PhpParser\Node\Stmt
{
    public function getSubNodeNames() : array
    {
        return [];
    }
    public function getType() : string
    {
        return 'Stmt_Nop';
    }
}
