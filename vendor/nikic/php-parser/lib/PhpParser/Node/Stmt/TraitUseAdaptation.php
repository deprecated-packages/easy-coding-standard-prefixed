<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\PhpParser\Node\Stmt;

use _PhpScoper70072c07b02b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper70072c07b02b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
