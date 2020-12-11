<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Node\Stmt;

use _PhpScoperea337ed74749\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperea337ed74749\PhpParser\Node\Stmt
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
