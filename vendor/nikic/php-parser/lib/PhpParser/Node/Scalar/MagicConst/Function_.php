<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperba24099fc6fd\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\MagicConst
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
