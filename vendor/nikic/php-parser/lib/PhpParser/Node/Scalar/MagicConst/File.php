<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst
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
