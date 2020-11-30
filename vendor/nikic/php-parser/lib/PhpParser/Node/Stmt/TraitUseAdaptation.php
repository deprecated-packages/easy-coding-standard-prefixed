<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node\Stmt;

use _PhpScopera09818bc50da\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera09818bc50da\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
