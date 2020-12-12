<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\Node\Stmt;

use _PhpScoperdaf95aff095b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperdaf95aff095b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
