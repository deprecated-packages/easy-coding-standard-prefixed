<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Node\Stmt;

use _PhpScoper224ae0b86670\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper224ae0b86670\PhpParser\Node\Stmt
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
