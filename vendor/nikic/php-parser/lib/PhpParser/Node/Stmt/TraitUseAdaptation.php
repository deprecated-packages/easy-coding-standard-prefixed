<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\PhpParser\Node\Stmt;

use _PhpScoper63567e560066\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper63567e560066\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
