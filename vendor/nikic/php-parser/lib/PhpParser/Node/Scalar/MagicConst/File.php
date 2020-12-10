<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__FILE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_File';
    }
}
