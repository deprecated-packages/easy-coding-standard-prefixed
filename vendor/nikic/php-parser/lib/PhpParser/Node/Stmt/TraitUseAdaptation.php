<?php

declare (strict_types=1);
namespace _PhpScoper3f3a54dd086f\PhpParser\Node\Stmt;

use _PhpScoper3f3a54dd086f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3f3a54dd086f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
