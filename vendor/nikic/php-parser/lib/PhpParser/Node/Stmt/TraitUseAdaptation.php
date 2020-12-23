<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Node\Stmt;

use _PhpScoperd9fcac9e904f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd9fcac9e904f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
