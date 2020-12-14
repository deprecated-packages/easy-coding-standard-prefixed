<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\MagicConst
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
