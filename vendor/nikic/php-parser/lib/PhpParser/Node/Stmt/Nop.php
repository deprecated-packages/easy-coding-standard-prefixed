<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Stmt;

use _PhpScoperb26833cc184d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb26833cc184d\PhpParser\Node\Stmt
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
