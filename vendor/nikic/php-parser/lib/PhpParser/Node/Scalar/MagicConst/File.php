<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst
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
