<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Node\Stmt;

use _PhpScoperc83f84c90b60\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc83f84c90b60\PhpParser\Node\Stmt
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
