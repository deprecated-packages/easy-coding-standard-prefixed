<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Node\Stmt;

use _PhpScoperfcee700af3df\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfcee700af3df\PhpParser\Node\Stmt
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
