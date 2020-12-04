<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Node\Stmt;

use _PhpScopera4fc793dae73\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera4fc793dae73\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
