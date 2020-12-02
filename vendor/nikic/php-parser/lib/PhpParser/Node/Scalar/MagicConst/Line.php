<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera23ebff5477f\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopera23ebff5477f\PhpParser\Node\Scalar\MagicConst
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
