<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc4b135661b3a\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoperc4b135661b3a\PhpParser\Node\Scalar\MagicConst
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
