<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper06c66bea2cf6\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoper06c66bea2cf6\PhpParser\Node\Scalar\MagicConst
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
