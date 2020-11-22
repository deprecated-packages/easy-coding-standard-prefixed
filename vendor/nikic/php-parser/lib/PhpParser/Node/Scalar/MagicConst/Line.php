<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst
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
