<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser\Node\Stmt;

use _PhpScoper5ca2d8bcb02c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper5ca2d8bcb02c\PhpParser\Node\Stmt
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
