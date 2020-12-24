<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser\Node\Stmt;

use _PhpScoper5ca2d8bcb02c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5ca2d8bcb02c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
