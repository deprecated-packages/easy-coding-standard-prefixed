<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\Node\Stmt;

use _PhpScoper04022cd986ec\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper04022cd986ec\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
