<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfcf15c26e033\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperfcf15c26e033\PhpParser\Node\Scalar\MagicConst
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
