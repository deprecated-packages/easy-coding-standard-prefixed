<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\Node\Stmt;

use _PhpScoperbaf90856897c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperbaf90856897c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
