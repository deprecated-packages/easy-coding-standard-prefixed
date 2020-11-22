<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\Node\Stmt;

use _PhpScoper3fa05b4669af\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper3fa05b4669af\PhpParser\Node\Stmt
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
