<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\Node\Stmt;

use _PhpScopere106f9fd4493\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopere106f9fd4493\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
