<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc8b83ee8976a\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoperc8b83ee8976a\PhpParser\Node\Scalar\MagicConst
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
