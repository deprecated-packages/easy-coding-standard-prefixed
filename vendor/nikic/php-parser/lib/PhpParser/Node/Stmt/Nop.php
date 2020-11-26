<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Node\Stmt;

use _PhpScopercb217fd4e736\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopercb217fd4e736\PhpParser\Node\Stmt
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
