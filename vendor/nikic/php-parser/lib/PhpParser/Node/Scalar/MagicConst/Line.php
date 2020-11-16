<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst
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
