<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera8f555a7493c\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScopera8f555a7493c\PhpParser\Node\Scalar\MagicConst
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
