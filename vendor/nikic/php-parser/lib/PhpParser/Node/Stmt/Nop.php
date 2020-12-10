<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt;

use _PhpScoperfab1bfb7ec99\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt
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
