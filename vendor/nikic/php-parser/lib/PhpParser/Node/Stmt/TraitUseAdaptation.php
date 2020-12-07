<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Node\Stmt;

use _PhpScoperb83706991c7f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb83706991c7f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
