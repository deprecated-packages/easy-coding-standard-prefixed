<?php

declare (strict_types=1);
namespace _PhpScoper02b5d1bf8fec\PhpParser\Node\Stmt;

use _PhpScoper02b5d1bf8fec\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper02b5d1bf8fec\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
