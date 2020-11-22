<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Node\Stmt;

use _PhpScoperbc5235eb86f3\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperbc5235eb86f3\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
