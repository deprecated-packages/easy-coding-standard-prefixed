<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst
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
