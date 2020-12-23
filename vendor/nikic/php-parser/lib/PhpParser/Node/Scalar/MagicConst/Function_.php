<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd9fcac9e904f\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperd9fcac9e904f\PhpParser\Node\Scalar\MagicConst
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
