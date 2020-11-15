<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PhpParser\Node\Stmt;

use _PhpScoper21763e6c7ac4\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper21763e6c7ac4\PhpParser\Node\Stmt
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
