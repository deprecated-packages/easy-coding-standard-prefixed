<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfa7254c25e18\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperfa7254c25e18\PhpParser\Node\Scalar\MagicConst
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
