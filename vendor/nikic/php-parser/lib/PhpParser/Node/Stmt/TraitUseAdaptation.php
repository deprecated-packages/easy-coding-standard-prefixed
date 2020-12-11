<?php

declare (strict_types=1);
namespace _PhpScoper3b1d73f28e67\PhpParser\Node\Stmt;

use _PhpScoper3b1d73f28e67\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3b1d73f28e67\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
