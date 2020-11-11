<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\PhpParser\Node\Stmt;

use _PhpScoper06c66bea2cf6\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper06c66bea2cf6\PhpParser\Node\Stmt
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
