<?php

declare (strict_types=1);
namespace _PhpScoper9f8d5dcff860\PhpParser\Node\Stmt;

use _PhpScoper9f8d5dcff860\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper9f8d5dcff860\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
