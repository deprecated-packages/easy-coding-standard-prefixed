<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst;
class Class_ extends \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__CLASS__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Class';
    }
}
