<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Node\Stmt;

use _PhpScopera061b8a47e36\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera061b8a47e36\PhpParser\Node\Stmt
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
