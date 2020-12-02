<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\Node\Stmt;

use _PhpScopera23ebff5477f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera23ebff5477f\PhpParser\Node\Stmt
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
