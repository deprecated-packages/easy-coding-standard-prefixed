<?php

declare (strict_types=1);
namespace _PhpScoper967d20dce97a\PhpParser\Node\Stmt;

use _PhpScoper967d20dce97a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper967d20dce97a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
