<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt;

use _PhpScoperad4b7e2c09d8\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
