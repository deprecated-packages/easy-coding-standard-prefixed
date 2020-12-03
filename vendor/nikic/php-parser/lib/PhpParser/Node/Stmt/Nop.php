<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Node\Stmt;

use _PhpScoperba5852cc6147\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperba5852cc6147\PhpParser\Node\Stmt
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
