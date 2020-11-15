<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd9c3b46af121\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperd9c3b46af121\PhpParser\Node\Scalar\MagicConst
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
