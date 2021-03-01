<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\Node\Stmt;

use _PhpScoperf3dc21757def\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf3dc21757def\PhpParser\Node\Stmt
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
