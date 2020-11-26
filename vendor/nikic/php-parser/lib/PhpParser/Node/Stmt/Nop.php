<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\Node\Stmt;

use _PhpScoperb2e2c0c42e71\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb2e2c0c42e71\PhpParser\Node\Stmt
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
