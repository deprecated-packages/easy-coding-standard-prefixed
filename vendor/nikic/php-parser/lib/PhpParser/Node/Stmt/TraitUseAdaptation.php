<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
