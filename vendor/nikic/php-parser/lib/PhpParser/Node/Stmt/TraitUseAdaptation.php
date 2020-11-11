<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Node\Stmt;

use _PhpScoper0f5cd390c37a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper0f5cd390c37a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
