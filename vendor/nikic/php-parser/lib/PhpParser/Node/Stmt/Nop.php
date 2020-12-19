<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Node\Stmt;

use _PhpScopera6f918786d5c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera6f918786d5c\PhpParser\Node\Stmt
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
