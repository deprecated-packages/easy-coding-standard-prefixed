<?php

declare (strict_types=1);
namespace _PhpScoper6250f8d25076\PhpParser\Node\Stmt;

use _PhpScoper6250f8d25076\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper6250f8d25076\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
