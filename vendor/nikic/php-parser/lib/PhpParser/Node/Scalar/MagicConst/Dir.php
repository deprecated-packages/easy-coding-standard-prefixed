<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb2e2c0c42e71\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperb2e2c0c42e71\PhpParser\Node\Scalar\MagicConst
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
