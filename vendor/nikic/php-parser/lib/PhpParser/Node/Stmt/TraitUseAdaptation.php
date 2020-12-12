<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82\PhpParser\Node\Stmt;

use _PhpScoper3e7ab659bd82\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3e7ab659bd82\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
