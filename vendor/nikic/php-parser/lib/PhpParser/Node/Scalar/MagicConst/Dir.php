<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst
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
