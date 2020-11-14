<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Node\Stmt;

use _PhpScoper229e8121cf9f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
