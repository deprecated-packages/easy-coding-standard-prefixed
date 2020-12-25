<?php

declare (strict_types=1);
namespace _PhpScoper15c5423f4731\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper15c5423f4731\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper15c5423f4731\PhpParser\Node\Scalar\MagicConst
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
