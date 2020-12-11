<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01\PhpParser\Node\Stmt;

use _PhpScoper23ef26a4fb01\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper23ef26a4fb01\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
