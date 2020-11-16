<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\Node\Stmt;

use _PhpScoperbcc0395698f8\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt
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
