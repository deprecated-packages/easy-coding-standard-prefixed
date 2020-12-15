<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PhpParser\Node\Stmt;

use _PhpScoperdeea1786e972\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperdeea1786e972\PhpParser\Node\Stmt
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
