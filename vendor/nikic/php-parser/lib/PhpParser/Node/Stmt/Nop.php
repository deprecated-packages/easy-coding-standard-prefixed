<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1\PhpParser\Node\Stmt;

use _PhpScoper4cd05b62e9f1\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4cd05b62e9f1\PhpParser\Node\Stmt
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
