<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\Node\Stmt;

use _PhpScopera749ac204cd2\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera749ac204cd2\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
