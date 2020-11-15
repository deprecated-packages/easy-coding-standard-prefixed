<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst
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
