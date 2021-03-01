<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt
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
