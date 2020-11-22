<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst
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
