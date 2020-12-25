<?php

declare (strict_types=1);
namespace _PhpScoper069ebd53a518\PhpParser\Node\Stmt;

use _PhpScoper069ebd53a518\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper069ebd53a518\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
