<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\MagicConst
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
