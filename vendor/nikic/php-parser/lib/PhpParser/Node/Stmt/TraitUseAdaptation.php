<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Node\Stmt;

use _PhpScopercb576ca159b5\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopercb576ca159b5\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
