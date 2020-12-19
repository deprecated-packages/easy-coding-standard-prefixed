<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Node\Stmt;

use _PhpScoperfb2c402b972b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfb2c402b972b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
