<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Node\Stmt;

use _PhpScopera37d6fb0b1ab\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera37d6fb0b1ab\PhpParser\Node\Stmt
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
