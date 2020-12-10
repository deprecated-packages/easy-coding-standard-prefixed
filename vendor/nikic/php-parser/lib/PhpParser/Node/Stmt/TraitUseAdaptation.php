<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94\PhpParser\Node\Stmt;

use _PhpScoper3a22e8e0bd94\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3a22e8e0bd94\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
