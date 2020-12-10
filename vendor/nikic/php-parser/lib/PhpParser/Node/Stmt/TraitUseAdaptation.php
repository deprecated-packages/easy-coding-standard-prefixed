<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c\PhpParser\Node\Stmt;

use _PhpScoper9ef667a5e42c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper9ef667a5e42c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
