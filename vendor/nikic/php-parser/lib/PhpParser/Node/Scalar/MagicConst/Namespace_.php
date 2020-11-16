<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst
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
