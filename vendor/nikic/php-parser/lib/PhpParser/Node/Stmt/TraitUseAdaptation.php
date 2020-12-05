<?php

declare (strict_types=1);
namespace _PhpScoper56c9df53a081\PhpParser\Node\Stmt;

use _PhpScoper56c9df53a081\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper56c9df53a081\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
