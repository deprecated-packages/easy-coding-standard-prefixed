<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\Node\Stmt;

use _PhpScoper745103eaabcd\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper745103eaabcd\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
