<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Node\Stmt;

use _PhpScoperd1a5bf00e83e\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd1a5bf00e83e\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
