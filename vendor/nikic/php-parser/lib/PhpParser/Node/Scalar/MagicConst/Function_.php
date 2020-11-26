<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst
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
