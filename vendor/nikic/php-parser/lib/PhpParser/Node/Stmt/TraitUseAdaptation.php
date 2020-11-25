<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Stmt;

use _PhpScoperaac5f7c652e4\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
