<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314\PhpParser\Node\Stmt;

use _PhpScoper1e80a2e03314\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper1e80a2e03314\PhpParser\Node\Stmt
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
