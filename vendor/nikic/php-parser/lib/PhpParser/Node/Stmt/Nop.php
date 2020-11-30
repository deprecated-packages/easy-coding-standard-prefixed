<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node\Stmt;

use _PhpScopera09818bc50da\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera09818bc50da\PhpParser\Node\Stmt
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
