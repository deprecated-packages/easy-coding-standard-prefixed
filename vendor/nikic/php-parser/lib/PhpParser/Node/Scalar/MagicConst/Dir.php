<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd4c5032f0671\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperd4c5032f0671\PhpParser\Node\Scalar\MagicConst
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
