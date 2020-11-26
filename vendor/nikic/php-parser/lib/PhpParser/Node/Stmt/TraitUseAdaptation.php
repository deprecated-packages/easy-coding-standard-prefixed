<?php

declare (strict_types=1);
namespace _PhpScoper614deab2c612\PhpParser\Node\Stmt;

use _PhpScoper614deab2c612\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper614deab2c612\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
