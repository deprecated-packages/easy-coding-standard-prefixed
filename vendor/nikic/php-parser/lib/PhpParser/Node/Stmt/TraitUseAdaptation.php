<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\PhpParser\Node\Stmt;

use _PhpScoper48800f361566\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper48800f361566\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
