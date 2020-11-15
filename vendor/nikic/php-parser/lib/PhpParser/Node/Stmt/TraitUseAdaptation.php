<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\Node\Stmt;

use _PhpScoper279cf54b77ad\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
