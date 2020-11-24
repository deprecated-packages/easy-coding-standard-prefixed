<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\Node\Stmt;

use _PhpScoperd675aaf00c76\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd675aaf00c76\PhpParser\Node\Stmt
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
