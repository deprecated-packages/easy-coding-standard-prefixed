<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst
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
