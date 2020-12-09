<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser\Node\Stmt;

use _PhpScoperf65af7a6d9a0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperf65af7a6d9a0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
