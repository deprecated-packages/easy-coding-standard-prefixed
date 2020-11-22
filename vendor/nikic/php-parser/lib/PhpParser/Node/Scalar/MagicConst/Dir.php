<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst
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
