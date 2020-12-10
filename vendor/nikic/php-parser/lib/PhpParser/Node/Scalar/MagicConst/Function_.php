<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper17bb67c99ade\PhpParser\Node\Scalar\MagicConst;
class Function_ extends \_PhpScoper17bb67c99ade\PhpParser\Node\Scalar\MagicConst
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
