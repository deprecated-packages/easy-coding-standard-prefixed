<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper224ae0b86670\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper224ae0b86670\PhpParser\Node\Scalar\MagicConst
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
