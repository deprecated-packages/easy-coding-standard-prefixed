<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Node\Stmt;

use _PhpScoperfcce67077a55\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfcce67077a55\PhpParser\Node\Stmt
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
