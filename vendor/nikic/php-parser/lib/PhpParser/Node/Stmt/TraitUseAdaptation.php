<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\Node\Stmt;

use _PhpScoperd3d57724c802\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd3d57724c802\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
