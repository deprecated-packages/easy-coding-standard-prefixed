<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Node\Stmt;

use _PhpScoperca8ca183ac38\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperca8ca183ac38\PhpParser\Node\Stmt
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
