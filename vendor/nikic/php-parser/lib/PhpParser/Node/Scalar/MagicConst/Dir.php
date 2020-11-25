<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst
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
