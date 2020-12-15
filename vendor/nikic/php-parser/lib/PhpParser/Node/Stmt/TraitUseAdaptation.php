<?php

declare (strict_types=1);
namespace _PhpScoper839420027581\PhpParser\Node\Stmt;

use _PhpScoper839420027581\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper839420027581\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
