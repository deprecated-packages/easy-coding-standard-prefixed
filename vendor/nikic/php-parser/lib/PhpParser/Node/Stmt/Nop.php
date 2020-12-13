<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\Node\Stmt;

use _PhpScoperd3d57724c802\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd3d57724c802\PhpParser\Node\Stmt
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
