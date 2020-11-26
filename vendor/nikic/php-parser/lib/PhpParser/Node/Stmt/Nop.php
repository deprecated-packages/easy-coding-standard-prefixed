<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\Node\Stmt;

use _PhpScoper4a718ec9156e\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4a718ec9156e\PhpParser\Node\Stmt
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
