<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273\PhpParser\Node\Stmt;

use _PhpScoper833c56a97273\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper833c56a97273\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
