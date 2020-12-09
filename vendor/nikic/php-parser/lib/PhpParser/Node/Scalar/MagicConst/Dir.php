<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\MagicConst
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
