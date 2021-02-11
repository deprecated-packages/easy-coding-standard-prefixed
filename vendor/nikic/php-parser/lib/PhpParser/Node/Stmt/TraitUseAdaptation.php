<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser\Node\Stmt;

use _PhpScoperef5048aa2573\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperef5048aa2573\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
