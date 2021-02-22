<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfcee700af3df\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperfcee700af3df\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__DIR__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Dir';
    }
}
