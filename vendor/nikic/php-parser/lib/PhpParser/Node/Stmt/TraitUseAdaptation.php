<?php

declare (strict_types=1);
namespace _PhpScoper3ba93baeac18\PhpParser\Node\Stmt;

use _PhpScoper3ba93baeac18\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3ba93baeac18\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
