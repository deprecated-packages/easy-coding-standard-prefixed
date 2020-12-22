<?php

declare (strict_types=1);
namespace _PhpScoper68a3a2539032\PhpParser\Node\Stmt;

use _PhpScoper68a3a2539032\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper68a3a2539032\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
