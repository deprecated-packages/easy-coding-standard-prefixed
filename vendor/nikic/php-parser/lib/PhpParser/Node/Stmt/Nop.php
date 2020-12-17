<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\Node\Stmt;

use _PhpScopercf909b66eba8\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopercf909b66eba8\PhpParser\Node\Stmt
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
