<?php

declare (strict_types=1);
namespace _PhpScoper38a7d00685f8\PhpParser\Node\Stmt;

use _PhpScoper38a7d00685f8\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper38a7d00685f8\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
