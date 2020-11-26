<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst
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
