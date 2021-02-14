<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Node\Stmt;

use _PhpScoperf361a7d70552\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf361a7d70552\PhpParser\Node\Stmt
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
