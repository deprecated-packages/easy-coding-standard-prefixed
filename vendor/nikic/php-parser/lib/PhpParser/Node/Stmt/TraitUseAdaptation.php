<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Node\Stmt;

use _PhpScopercb217fd4e736\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopercb217fd4e736\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
