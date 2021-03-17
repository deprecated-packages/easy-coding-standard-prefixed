<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\PhpParser\Node\Stmt;

use _PhpScoper0c0702cca4ac\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper0c0702cca4ac\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
