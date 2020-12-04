<?php

declare (strict_types=1);
namespace _PhpScoperc233426b15e0\PhpParser\Node\Stmt;

use _PhpScoperc233426b15e0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc233426b15e0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
