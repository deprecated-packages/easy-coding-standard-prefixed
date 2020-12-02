<?php

declare (strict_types=1);
namespace _PhpScoperf62d28230928\PhpParser\Node\Stmt;

use _PhpScoperf62d28230928\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf62d28230928\PhpParser\Node\Stmt
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
