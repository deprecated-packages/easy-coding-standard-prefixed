<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperaad82bb90a86\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperaad82bb90a86\PhpParser\Node\Scalar\MagicConst
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
