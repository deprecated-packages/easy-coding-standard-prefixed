<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f\PhpParser\Node\Stmt;

use _PhpScoper5c006f5f032f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5c006f5f032f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
