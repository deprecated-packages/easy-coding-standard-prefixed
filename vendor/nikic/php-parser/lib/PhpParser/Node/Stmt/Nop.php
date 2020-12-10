<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser\Node\Stmt;

use _PhpScoperf7b66f9e3817\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf7b66f9e3817\PhpParser\Node\Stmt
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
