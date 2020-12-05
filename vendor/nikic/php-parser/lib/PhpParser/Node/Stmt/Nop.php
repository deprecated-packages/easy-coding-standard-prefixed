<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Node\Stmt;

use _PhpScoperaba240c3d5f1\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperaba240c3d5f1\PhpParser\Node\Stmt
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
