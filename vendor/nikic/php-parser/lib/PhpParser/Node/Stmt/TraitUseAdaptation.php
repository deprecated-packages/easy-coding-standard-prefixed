<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\PhpParser\Node\Stmt;

use _PhpScoper0270f1d35181\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper0270f1d35181\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
