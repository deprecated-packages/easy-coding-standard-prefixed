<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
