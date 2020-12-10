<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera1a51450b61d\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScopera1a51450b61d\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__METHOD__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Method';
    }
}
