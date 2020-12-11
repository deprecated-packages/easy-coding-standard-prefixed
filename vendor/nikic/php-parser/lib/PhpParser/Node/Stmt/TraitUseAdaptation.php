<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\Node\Stmt;

use _PhpScopere4fa57261c04\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopere4fa57261c04\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
