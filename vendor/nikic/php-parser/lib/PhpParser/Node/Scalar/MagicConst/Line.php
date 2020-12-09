<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper7f5523334c1b\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper7f5523334c1b\PhpParser\Node\Scalar\MagicConst
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
