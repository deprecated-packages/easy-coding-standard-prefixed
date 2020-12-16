<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
