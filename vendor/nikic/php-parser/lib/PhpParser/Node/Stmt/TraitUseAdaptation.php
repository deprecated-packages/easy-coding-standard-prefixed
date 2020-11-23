<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59\PhpParser\Node\Stmt;

use _PhpScoper7b8580219c59\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper7b8580219c59\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
