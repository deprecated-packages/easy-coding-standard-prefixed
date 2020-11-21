<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PhpParser\Node\Stmt;

use _PhpScopera4be459e5e3d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
