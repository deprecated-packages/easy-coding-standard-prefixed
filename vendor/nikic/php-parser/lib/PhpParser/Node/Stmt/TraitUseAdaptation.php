<?php

declare (strict_types=1);
namespace _PhpScoper79449c4e744b\PhpParser\Node\Stmt;

use _PhpScoper79449c4e744b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper79449c4e744b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
