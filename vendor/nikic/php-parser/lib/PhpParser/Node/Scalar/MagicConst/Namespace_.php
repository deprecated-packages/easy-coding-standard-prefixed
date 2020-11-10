<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\PhpParser\Node\Scalar\MagicConst;

use _PhpScopere5e7dca8c031\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScopere5e7dca8c031\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__NAMESPACE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Namespace';
    }
}
