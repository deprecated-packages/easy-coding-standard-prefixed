<?php

declare (strict_types=1);
namespace _PhpScoper7c0f822a05e1\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper7c0f822a05e1\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper7c0f822a05e1\PhpParser\Node\Scalar\MagicConst
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
