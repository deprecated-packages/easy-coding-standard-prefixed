<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\Node\Stmt;

use _PhpScoper06c5fb6c14ed\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper06c5fb6c14ed\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
