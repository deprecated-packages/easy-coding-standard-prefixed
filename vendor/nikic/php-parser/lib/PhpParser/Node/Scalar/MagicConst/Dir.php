<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf361a7d70552\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperf361a7d70552\PhpParser\Node\Scalar\MagicConst
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
