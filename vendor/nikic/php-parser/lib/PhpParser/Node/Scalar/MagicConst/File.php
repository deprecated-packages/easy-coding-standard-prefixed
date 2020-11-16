<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst
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
