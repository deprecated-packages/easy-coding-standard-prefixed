<?php

declare (strict_types=1);
namespace _PhpScoper13133e188f67\PhpParser\Node\Stmt;

use _PhpScoper13133e188f67\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper13133e188f67\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
