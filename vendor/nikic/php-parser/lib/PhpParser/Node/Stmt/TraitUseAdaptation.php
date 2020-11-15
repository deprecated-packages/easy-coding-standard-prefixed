<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\Node\Stmt;

use _PhpScopera189153e1f79\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera189153e1f79\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
