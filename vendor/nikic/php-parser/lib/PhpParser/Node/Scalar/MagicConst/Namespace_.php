<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst
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
