<?php

declare (strict_types=1);
namespace _PhpScoper207eb8f99af3\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper207eb8f99af3\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper207eb8f99af3\PhpParser\Node\Scalar\MagicConst
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
