<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera9d6b451df71\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScopera9d6b451df71\PhpParser\Node\Scalar\MagicConst
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
