<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\PhpParser\Node\Stmt;

use _PhpScoper2fe14d6302bc\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper2fe14d6302bc\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
