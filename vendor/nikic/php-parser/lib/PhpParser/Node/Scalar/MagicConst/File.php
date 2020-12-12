<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper83b3b9a317c0\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper83b3b9a317c0\PhpParser\Node\Scalar\MagicConst
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
