<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper57272265e1c9\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper57272265e1c9\PhpParser\Node\Scalar\MagicConst
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
