<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperad68e34a80c5\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperad68e34a80c5\PhpParser\Node\Scalar\MagicConst
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
