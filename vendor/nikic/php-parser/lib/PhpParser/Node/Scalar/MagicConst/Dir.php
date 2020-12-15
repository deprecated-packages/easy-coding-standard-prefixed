<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdeea1786e972\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperdeea1786e972\PhpParser\Node\Scalar\MagicConst
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
