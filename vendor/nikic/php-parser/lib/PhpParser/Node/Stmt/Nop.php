<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Stmt;

use _PhpScoperad4605bb9267\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperad4605bb9267\PhpParser\Node\Stmt
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
