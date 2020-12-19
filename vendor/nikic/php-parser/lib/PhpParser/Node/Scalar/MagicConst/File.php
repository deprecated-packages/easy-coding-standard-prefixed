<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper065e4ba46e6d\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper065e4ba46e6d\PhpParser\Node\Scalar\MagicConst
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
