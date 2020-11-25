<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Node\Stmt;

use _PhpScoper418afc2f157c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper418afc2f157c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
