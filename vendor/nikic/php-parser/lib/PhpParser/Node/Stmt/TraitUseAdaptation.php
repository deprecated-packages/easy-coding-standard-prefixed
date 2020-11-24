<?php

declare (strict_types=1);
namespace _PhpScoper7c0f822a05e1\PhpParser\Node\Stmt;

use _PhpScoper7c0f822a05e1\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper7c0f822a05e1\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
