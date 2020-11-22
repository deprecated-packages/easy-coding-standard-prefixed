<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper5ade29b97028\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper5ade29b97028\PhpParser\Node\Scalar\MagicConst
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
