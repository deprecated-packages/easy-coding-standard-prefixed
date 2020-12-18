<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Node\Stmt;

use _PhpScoperd8b12759ee0d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd8b12759ee0d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
