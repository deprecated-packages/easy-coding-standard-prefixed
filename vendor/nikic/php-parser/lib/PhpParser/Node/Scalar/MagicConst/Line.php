<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper8e2d8a2760d1\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper8e2d8a2760d1\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
