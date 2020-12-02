<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\Node\Stmt;

use _PhpScoperfaaf57618f34\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfaaf57618f34\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
