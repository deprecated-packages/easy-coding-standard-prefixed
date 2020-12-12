<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper8a05d21c15c9\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper8a05d21c15c9\PhpParser\Node\Scalar\MagicConst
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
