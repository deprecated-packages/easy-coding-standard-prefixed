<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst
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
