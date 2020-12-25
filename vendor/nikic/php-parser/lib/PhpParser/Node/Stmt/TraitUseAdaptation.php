<?php

declare (strict_types=1);
namespace _PhpScoper15c5423f4731\PhpParser\Node\Stmt;

use _PhpScoper15c5423f4731\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper15c5423f4731\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
