<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd301db66c80c\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperd301db66c80c\PhpParser\Node\Scalar\MagicConst
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
