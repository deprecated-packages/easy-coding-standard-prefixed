<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\Node\Stmt;

use _PhpScoper2f75f00bf6fa\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper2f75f00bf6fa\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
