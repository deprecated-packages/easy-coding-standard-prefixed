<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera34ae19e8d40\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopera34ae19e8d40\PhpParser\Node\Scalar\MagicConst
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
