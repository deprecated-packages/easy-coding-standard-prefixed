<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5\PhpParser\Node\Stmt;

use _PhpScoperad68e34a80c5\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperad68e34a80c5\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
