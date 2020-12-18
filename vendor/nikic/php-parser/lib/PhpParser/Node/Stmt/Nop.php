<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Node\Stmt;

use _PhpScoperd8b12759ee0d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd8b12759ee0d\PhpParser\Node\Stmt
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
