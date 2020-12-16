<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperd35c27cd4b09\PhpParser\Node\Scalar\MagicConst
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
