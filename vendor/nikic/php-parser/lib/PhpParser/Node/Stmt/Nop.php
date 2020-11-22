<?php

declare (strict_types=1);
namespace _PhpScoper21fff473f90a\PhpParser\Node\Stmt;

use _PhpScoper21fff473f90a\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper21fff473f90a\PhpParser\Node\Stmt
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
