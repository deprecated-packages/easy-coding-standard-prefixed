<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera3425146d487\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopera3425146d487\PhpParser\Node\Scalar\MagicConst
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
