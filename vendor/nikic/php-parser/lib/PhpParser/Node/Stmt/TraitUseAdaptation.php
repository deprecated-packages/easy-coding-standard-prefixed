<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6\PhpParser\Node\Stmt;

use _PhpScopere050faf861e6\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopere050faf861e6\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
