<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper3e8786a75afe\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper3e8786a75afe\PhpParser\Node\Scalar\MagicConst
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
