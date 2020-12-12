<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2\PhpParser\Node\Stmt;

use _PhpScoper326bba7310a2\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper326bba7310a2\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
