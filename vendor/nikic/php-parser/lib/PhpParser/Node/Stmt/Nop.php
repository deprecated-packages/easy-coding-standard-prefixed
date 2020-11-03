<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node\Stmt;

use _PhpScoperaad82bb90a86\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperaad82bb90a86\PhpParser\Node\Stmt
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
