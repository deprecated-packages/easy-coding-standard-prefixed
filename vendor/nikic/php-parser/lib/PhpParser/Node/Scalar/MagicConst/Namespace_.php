<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper8acb416c2f5a\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper8acb416c2f5a\PhpParser\Node\Scalar\MagicConst
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
