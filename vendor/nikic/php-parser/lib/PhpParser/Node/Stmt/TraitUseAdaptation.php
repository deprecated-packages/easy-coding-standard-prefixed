<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\Node\Stmt;

use _PhpScoperc5bee3a837bb\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc5bee3a837bb\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
