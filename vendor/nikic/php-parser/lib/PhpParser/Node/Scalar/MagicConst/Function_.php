<?php

declare (strict_types=1);
namespace _PhpScoper2a48669dad72\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper2a48669dad72\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoper2a48669dad72\PhpParser\Node\Scalar\MagicConst
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
