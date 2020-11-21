<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PhpParser\Node\Stmt;

use _PhpScopera4be459e5e3d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt
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
