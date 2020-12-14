<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node\Stmt;

use _PhpScoperc64a4ac1af35\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt
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
