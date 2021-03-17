<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Node\Stmt;

use _PhpScoper842c7347e6be\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper842c7347e6be\PhpParser\Node\Stmt
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
