<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst;

use _PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScopera51a90153f58\PhpParser\Node\Scalar\MagicConst
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
