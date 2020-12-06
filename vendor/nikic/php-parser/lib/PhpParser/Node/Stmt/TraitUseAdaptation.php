<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Node\Stmt;

use _PhpScoper3e8786a75afe\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3e8786a75afe\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
