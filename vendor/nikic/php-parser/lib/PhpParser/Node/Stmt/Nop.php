<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt;

use _PhpScoperc753ccca5a0c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt
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
