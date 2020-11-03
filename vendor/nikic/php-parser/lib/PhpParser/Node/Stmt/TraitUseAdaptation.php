<?php

declare (strict_types=1);
namespace _PhpScoper3d04c8135695\PhpParser\Node\Stmt;

use _PhpScoper3d04c8135695\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3d04c8135695\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
