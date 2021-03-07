<?php

declare (strict_types=1);
namespace _PhpScoper6625323d9c29\PhpParser\Node\Stmt;

use _PhpScoper6625323d9c29\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper6625323d9c29\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
