<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd4937ee9b515\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperd4937ee9b515\PhpParser\Node\Scalar\MagicConst
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
