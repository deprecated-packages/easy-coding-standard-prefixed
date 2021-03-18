<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7\PhpParser\Node\Stmt;

use _PhpScoper5f6e904600e7\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5f6e904600e7\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
