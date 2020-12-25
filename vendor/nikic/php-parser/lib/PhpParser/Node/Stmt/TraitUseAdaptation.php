<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7\PhpParser\Node\Stmt;

use _PhpScoper92597f5b42a7\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper92597f5b42a7\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
