<?php

declare (strict_types=1);
namespace _PhpScoper3b1d73f28e67\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper3b1d73f28e67\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper3b1d73f28e67\PhpParser\Node\Scalar\MagicConst
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
