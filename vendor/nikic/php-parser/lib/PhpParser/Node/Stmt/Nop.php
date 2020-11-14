<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Node\Stmt;

use _PhpScopercda2b863d098\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopercda2b863d098\PhpParser\Node\Stmt
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
