<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser\Node\Stmt;

use _PhpScopercae980ebf12d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopercae980ebf12d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
