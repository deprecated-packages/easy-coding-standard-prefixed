<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Stmt;

use _PhpScoperaac5f7c652e4\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Stmt
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
