<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Node\Stmt;

use _PhpScoperfb0714773dc5\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
