<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd8b12759ee0d\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperd8b12759ee0d\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__FUNCTION__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Function';
    }
}
