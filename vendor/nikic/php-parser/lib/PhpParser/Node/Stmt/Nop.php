<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\Node\Stmt;

use _PhpScoper807f8e74693b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper807f8e74693b\PhpParser\Node\Stmt
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
