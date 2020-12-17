<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercf909b66eba8\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopercf909b66eba8\PhpParser\Node\Scalar\MagicConst
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
