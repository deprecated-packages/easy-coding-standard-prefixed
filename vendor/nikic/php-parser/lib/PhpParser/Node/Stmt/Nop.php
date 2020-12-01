<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5\PhpParser\Node\Stmt;

use _PhpScoperad68e34a80c5\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperad68e34a80c5\PhpParser\Node\Stmt
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
