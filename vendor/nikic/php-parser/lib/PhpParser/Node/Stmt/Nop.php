<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Node\Stmt;

use _PhpScoperab9510cd5d97\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperab9510cd5d97\PhpParser\Node\Stmt
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
