<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScopercb217fd4e736\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__DIR__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Dir';
    }
}
