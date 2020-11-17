<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst
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
