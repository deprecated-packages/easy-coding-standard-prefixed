<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper8db4616aa69d\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoper8db4616aa69d\PhpParser\Node\Scalar\MagicConst
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
