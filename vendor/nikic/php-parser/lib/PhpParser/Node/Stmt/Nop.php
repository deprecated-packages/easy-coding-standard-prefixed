<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\PhpParser\Node\Stmt;

use _PhpScopera9d6b451df71\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera9d6b451df71\PhpParser\Node\Stmt
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
