<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Node\Stmt;

use _PhpScopera88a8b9f064a\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt
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
