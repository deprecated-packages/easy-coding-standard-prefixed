<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperda2604e33acb\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoperda2604e33acb\PhpParser\Node\Scalar\MagicConst
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
