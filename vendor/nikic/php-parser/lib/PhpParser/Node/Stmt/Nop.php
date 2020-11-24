<?php

declare (strict_types=1);
namespace _PhpScoperf3d5f0921050\PhpParser\Node\Stmt;

use _PhpScoperf3d5f0921050\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf3d5f0921050\PhpParser\Node\Stmt
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
