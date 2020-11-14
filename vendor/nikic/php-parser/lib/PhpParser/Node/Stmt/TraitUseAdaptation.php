<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Node\Stmt;

use _PhpScopercda2b863d098\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopercda2b863d098\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
