<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node\Stmt;

use _PhpScoperaad82bb90a86\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperaad82bb90a86\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
