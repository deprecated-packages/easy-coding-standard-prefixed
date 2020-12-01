<?php

declare (strict_types=1);
namespace _PhpScoper9613f3fac51d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper9613f3fac51d\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper9613f3fac51d\PhpParser\Node\Scalar\MagicConst
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
