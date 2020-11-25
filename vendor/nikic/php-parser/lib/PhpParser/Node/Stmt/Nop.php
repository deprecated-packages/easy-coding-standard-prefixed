<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt
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
