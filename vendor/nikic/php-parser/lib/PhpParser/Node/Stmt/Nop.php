<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7\PhpParser\Node\Stmt;

use _PhpScoper5f6e904600e7\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper5f6e904600e7\PhpParser\Node\Stmt
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
