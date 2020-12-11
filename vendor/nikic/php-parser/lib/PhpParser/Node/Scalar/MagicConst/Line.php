<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera061b8a47e36\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopera061b8a47e36\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
