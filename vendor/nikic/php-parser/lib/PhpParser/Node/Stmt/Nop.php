<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Node\Stmt;

use _PhpScoperdf15f2b748e9\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperdf15f2b748e9\PhpParser\Node\Stmt
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
