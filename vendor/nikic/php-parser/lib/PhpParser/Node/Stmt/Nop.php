<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\Node\Stmt;

use _PhpScoperc8fea59b0cb1\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc8fea59b0cb1\PhpParser\Node\Stmt
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
