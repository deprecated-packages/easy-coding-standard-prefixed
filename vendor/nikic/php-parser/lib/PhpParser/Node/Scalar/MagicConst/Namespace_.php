<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper89ec3c69e67d\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper89ec3c69e67d\PhpParser\Node\Scalar\MagicConst
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
