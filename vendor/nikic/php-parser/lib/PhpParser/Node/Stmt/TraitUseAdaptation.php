<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PhpParser\Node\Stmt;

use _PhpScoperdeea1786e972\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperdeea1786e972\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
