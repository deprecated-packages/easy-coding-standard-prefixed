<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper7c1f54fd2f3a\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper7c1f54fd2f3a\PhpParser\Node\Scalar\MagicConst
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
