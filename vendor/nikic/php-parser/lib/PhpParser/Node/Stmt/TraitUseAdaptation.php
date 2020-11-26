<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node\Stmt;

use _PhpScoper167729fa1dde\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper167729fa1dde\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
