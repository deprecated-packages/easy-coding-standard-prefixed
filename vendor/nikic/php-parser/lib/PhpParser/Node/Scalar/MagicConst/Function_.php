<?php

declare (strict_types=1);
namespace _PhpScoper6a1dd9b8a650\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper6a1dd9b8a650\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoper6a1dd9b8a650\PhpParser\Node\Scalar\MagicConst
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
