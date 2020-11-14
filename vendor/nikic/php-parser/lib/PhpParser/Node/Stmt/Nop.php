<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\Node\Stmt;

use _PhpScopera749ac204cd2\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera749ac204cd2\PhpParser\Node\Stmt
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
