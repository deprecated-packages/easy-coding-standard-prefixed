<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\PhpParser\Node\Stmt;

use _PhpScoper06c66bea2cf6\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper06c66bea2cf6\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
