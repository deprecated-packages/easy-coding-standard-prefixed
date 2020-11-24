<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\Node\Stmt;

use _PhpScoperd675aaf00c76\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd675aaf00c76\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
