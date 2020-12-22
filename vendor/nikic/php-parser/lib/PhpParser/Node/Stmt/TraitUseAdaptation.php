<?php

declare (strict_types=1);
namespace _PhpScoper5813f9b171f8\PhpParser\Node\Stmt;

use _PhpScoper5813f9b171f8\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5813f9b171f8\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
