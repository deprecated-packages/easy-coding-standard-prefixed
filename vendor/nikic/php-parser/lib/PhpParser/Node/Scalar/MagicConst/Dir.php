<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper11a6395266c4\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper11a6395266c4\PhpParser\Node\Scalar\MagicConst
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
