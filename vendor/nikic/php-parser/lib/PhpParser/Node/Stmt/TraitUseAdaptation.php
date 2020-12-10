<?php

declare (strict_types=1);
namespace _PhpScoper8dd2e1c340b1\PhpParser\Node\Stmt;

use _PhpScoper8dd2e1c340b1\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8dd2e1c340b1\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
