<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbd5c5a045153\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperbd5c5a045153\PhpParser\Node\Scalar\MagicConst
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
