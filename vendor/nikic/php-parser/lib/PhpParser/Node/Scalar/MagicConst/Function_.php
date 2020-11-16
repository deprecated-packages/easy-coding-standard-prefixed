<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbcc0395698f8\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperbcc0395698f8\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__FUNCTION__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Function';
    }
}
