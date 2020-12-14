<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node\Stmt;

use _PhpScoperc64a4ac1af35\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
