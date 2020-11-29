<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercae980ebf12d\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends \_PhpScopercae980ebf12d\PhpParser\Node\Scalar\MagicConst
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
