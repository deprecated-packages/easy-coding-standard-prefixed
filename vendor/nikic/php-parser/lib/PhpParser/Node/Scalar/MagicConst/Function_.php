<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperecb978830f1e\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperecb978830f1e\PhpParser\Node\Scalar\MagicConst
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
