<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\MagicConst
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
