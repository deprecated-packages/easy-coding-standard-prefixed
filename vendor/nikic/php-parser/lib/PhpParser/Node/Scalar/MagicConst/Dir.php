<?php

declare (strict_types=1);
namespace _PhpScoper5384d7276e1f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper5384d7276e1f\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper5384d7276e1f\PhpParser\Node\Scalar\MagicConst
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
