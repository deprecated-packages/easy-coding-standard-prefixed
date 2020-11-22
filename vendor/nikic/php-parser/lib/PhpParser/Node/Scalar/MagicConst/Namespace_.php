<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper6db4fde00cda\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoper6db4fde00cda\PhpParser\Node\Scalar\MagicConst
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
