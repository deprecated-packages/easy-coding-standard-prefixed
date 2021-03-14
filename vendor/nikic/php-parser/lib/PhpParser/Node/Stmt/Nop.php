<?php

declare (strict_types=1);
namespace _PhpScoper3d66e802e797\PhpParser\Node\Stmt;

use _PhpScoper3d66e802e797\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper3d66e802e797\PhpParser\Node\Stmt
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
