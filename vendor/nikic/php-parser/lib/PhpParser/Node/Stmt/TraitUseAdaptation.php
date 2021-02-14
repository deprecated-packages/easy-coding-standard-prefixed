<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser\Node\Stmt;

use _PhpScoper89c09b8e7101\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper89c09b8e7101\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
