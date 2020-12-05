<?php

declare (strict_types=1);
namespace _PhpScoper02b5d1bf8fec\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper02b5d1bf8fec\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper02b5d1bf8fec\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__DIR__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Dir';
    }
}
