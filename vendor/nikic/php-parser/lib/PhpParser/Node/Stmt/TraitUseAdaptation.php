<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\Node\Stmt;

use _PhpScoper3fa05b4669af\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3fa05b4669af\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
