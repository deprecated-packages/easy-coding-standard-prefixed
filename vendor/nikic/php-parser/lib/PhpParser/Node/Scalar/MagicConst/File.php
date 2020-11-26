<?php

declare (strict_types=1);
namespace _PhpScoper5cb8aea05893\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper5cb8aea05893\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper5cb8aea05893\PhpParser\Node\Scalar\MagicConst
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
