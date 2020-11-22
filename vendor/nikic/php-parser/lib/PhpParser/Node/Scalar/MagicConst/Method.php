<?php

declare (strict_types=1);
namespace _PhpScoper797695bcfb1f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper797695bcfb1f\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper797695bcfb1f\PhpParser\Node\Scalar\MagicConst
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
