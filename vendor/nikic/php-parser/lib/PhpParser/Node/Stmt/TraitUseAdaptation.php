<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PhpParser\Node\Stmt;

use _PhpScoper89ec3c69e67d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper89ec3c69e67d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
