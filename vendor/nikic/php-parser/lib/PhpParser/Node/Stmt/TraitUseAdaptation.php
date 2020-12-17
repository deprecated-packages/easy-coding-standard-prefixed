<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\Node\Stmt;

use _PhpScopercf909b66eba8\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopercf909b66eba8\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
