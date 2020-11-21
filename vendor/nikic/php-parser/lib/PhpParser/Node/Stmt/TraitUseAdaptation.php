<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Node\Stmt;

use _PhpScoper224ae0b86670\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper224ae0b86670\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
