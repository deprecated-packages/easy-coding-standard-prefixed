<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Node\Stmt;

use _PhpScoper246d3630afdd\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper246d3630afdd\PhpParser\Node\Stmt
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
