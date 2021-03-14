<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Node\Stmt;

use _PhpScoperfb0714773dc5\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt
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
