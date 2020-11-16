<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Node\Stmt;

use _PhpScoperdf6a0b341030\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperdf6a0b341030\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
