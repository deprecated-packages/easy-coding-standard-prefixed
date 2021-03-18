<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\Node\Stmt;

use _PhpScoperf53473b45c36\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf53473b45c36\PhpParser\Node\Stmt
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
