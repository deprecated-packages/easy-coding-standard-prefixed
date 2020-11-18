<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\PhpParser\Node\Stmt;

use _PhpScoper0270f1d35181\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper0270f1d35181\PhpParser\Node\Stmt
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
