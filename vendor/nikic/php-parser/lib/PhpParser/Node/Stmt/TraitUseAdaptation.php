<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1\PhpParser\Node\Stmt;

use _PhpScoper4cd05b62e9f1\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4cd05b62e9f1\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
