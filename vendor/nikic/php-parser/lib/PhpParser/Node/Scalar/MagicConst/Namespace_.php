<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper57210e33e43a\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper57210e33e43a\PhpParser\Node\Scalar\MagicConst
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
