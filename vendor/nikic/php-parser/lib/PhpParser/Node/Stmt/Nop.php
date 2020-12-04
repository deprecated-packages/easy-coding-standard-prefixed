<?php

declare (strict_types=1);
namespace _PhpScoperc233426b15e0\PhpParser\Node\Stmt;

use _PhpScoperc233426b15e0\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc233426b15e0\PhpParser\Node\Stmt
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
