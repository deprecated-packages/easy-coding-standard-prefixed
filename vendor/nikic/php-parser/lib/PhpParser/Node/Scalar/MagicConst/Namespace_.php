<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper992f4af8b9e0\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper992f4af8b9e0\PhpParser\Node\Scalar\MagicConst
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
