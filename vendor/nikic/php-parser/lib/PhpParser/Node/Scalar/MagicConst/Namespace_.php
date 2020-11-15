<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera189153e1f79\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScopera189153e1f79\PhpParser\Node\Scalar\MagicConst
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
