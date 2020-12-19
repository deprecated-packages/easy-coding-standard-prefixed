<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\Node\Stmt;

use _PhpScoper269dc521b0fa\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper269dc521b0fa\PhpParser\Node\Stmt
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
