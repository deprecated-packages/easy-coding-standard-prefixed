<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser\Node\Stmt;

use _PhpScoperef5048aa2573\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperef5048aa2573\PhpParser\Node\Stmt
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
