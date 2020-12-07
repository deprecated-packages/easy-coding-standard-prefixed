<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst
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
