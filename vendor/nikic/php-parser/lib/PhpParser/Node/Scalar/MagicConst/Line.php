<?php

declare (strict_types=1);
namespace _PhpScoper80dbed43490f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper80dbed43490f\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper80dbed43490f\PhpParser\Node\Scalar\MagicConst
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
