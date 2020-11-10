<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\PhpParser\Node\Stmt;

use _PhpScopere5e7dca8c031\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
