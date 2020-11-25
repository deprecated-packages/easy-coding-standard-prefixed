<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Stmt;

use _PhpScoperd301db66c80c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd301db66c80c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
