<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\PhpParser\Node\Stmt;

use _PhpScoper7cef7256eba6\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper7cef7256eba6\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}