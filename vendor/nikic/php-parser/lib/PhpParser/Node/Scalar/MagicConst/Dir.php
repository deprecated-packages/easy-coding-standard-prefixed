<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperad4605bb9267\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperad4605bb9267\PhpParser\Node\Scalar\MagicConst
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
