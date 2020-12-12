<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PhpParser\Node\Stmt;

use _PhpScoper83b3b9a317c0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper83b3b9a317c0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
