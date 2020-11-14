<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Stmt;

use _PhpScoperecb978830f1e\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperecb978830f1e\PhpParser\Node\Stmt
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
