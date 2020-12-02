<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\Node\Stmt;

use _PhpScopera23ebff5477f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera23ebff5477f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
