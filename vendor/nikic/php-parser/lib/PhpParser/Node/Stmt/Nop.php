<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\Node\Stmt;

use _PhpScopere106f9fd4493\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopere106f9fd4493\PhpParser\Node\Stmt
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
