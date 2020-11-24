<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd675aaf00c76\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperd675aaf00c76\PhpParser\Node\Scalar\MagicConst
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
