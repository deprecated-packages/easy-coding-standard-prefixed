<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\Node\Scalar\MagicConst;

use _PhpScopere106f9fd4493\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopere106f9fd4493\PhpParser\Node\Scalar\MagicConst
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
