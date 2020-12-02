<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst
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
