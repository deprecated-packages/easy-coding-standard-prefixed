<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58\PhpParser\Node\Stmt;

use _PhpScopera51a90153f58\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera51a90153f58\PhpParser\Node\Stmt
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
