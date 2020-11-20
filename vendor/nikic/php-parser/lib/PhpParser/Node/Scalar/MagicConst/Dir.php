<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb6d4bd368bd9\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperb6d4bd368bd9\PhpParser\Node\Scalar\MagicConst
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
