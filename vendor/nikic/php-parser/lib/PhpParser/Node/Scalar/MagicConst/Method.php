<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper7b8580219c59\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper7b8580219c59\PhpParser\Node\Scalar\MagicConst
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
