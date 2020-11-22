<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Node\Stmt;

use _PhpScoperac4e86be08e5\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt
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
