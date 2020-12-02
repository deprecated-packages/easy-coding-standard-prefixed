<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\Node\Stmt;

use _PhpScoperfaaf57618f34\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfaaf57618f34\PhpParser\Node\Stmt
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
