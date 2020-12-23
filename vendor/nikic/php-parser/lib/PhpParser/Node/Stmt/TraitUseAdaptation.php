<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\Node\Stmt;

use _PhpScoper14cb6de5473d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper14cb6de5473d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
