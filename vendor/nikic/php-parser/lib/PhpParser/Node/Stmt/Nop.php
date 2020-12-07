<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\Node\Stmt;

use _PhpScopereb8678af2407\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopereb8678af2407\PhpParser\Node\Stmt
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
