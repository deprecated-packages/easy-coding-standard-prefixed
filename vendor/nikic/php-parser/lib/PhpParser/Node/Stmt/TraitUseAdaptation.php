<?php

declare (strict_types=1);
namespace _PhpScoper470d6df94ac0\PhpParser\Node\Stmt;

use _PhpScoper470d6df94ac0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper470d6df94ac0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
