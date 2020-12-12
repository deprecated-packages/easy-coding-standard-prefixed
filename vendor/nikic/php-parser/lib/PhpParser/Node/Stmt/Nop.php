<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\Node\Stmt;

use _PhpScoperdaf95aff095b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperdaf95aff095b\PhpParser\Node\Stmt
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
