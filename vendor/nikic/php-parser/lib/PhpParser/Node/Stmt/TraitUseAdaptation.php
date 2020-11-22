<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Node\Stmt;

use _PhpScoperac4e86be08e5\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
