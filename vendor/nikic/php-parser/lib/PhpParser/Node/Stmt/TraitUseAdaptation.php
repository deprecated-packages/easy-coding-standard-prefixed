<?php

declare (strict_types=1);
namespace _PhpScoper59558822d8c7\PhpParser\Node\Stmt;

use _PhpScoper59558822d8c7\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper59558822d8c7\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
