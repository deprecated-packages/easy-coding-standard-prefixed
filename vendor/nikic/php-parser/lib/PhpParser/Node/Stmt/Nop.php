<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\Node\Stmt;

use _PhpScoperbaf90856897c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperbaf90856897c\PhpParser\Node\Stmt
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
