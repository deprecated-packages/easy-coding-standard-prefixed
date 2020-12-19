<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\Node\Stmt;

use _PhpScoper269dc521b0fa\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper269dc521b0fa\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
