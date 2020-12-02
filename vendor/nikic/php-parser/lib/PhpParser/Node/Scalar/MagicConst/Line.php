<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst
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
