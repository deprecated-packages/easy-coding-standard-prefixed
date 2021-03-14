<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfb0714773dc5\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperfb0714773dc5\PhpParser\Node\Scalar\MagicConst
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
