<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper2f75f00bf6fa\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper2f75f00bf6fa\PhpParser\Node\Scalar\MagicConst
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
