<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Stmt;

use _PhpScoperd301db66c80c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd301db66c80c\PhpParser\Node\Stmt
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
