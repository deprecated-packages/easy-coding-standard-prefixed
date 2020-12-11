<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb26833cc184d\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperb26833cc184d\PhpParser\Node\Scalar\MagicConst
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
