<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\PhpParser\Node\Stmt;

use _PhpScoper4936962185e7\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4936962185e7\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
