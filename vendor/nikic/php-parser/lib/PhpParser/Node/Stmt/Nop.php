<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\Node\Stmt;

use _PhpScoperfa7254c25e18\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfa7254c25e18\PhpParser\Node\Stmt
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
