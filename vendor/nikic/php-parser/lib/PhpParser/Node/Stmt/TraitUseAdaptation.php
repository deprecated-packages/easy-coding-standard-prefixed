<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\Node\Stmt;

use _PhpScoper528afa732cbd\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper528afa732cbd\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
