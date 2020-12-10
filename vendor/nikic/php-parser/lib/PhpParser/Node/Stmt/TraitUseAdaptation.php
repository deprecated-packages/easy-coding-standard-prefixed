<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt;

use _PhpScoperfab1bfb7ec99\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
