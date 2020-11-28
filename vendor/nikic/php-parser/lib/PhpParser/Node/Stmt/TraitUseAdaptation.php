<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Node\Stmt;

use _PhpScoperfcce67077a55\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfcce67077a55\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
