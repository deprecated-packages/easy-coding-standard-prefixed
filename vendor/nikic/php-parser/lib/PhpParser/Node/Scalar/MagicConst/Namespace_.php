<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\MagicConst
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
