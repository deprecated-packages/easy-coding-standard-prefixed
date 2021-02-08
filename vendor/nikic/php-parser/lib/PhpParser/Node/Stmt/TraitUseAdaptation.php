<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\Node\Stmt;

use _PhpScoper326af2119eba\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper326af2119eba\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
