<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node\Stmt;

use _PhpScoperd35c27cd4b09\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd35c27cd4b09\PhpParser\Node\Stmt
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
