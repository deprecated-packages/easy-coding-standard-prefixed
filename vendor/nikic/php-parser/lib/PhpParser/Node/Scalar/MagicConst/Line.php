<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopera1f11cc38772\PhpParser\Node\Scalar\MagicConst
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
