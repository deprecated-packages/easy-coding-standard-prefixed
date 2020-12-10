<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\Node\Stmt;

use _PhpScopera1a51450b61d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera1a51450b61d\PhpParser\Node\Stmt
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
