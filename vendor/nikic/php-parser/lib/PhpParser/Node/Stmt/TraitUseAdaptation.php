<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PhpParser\Node\Stmt;

use _PhpScoperd74b3ed28382\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd74b3ed28382\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
