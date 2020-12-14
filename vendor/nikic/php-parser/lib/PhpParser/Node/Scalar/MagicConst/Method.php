<?php

declare (strict_types=1);
namespace _PhpScoper4e47e3b12394\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper4e47e3b12394\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper4e47e3b12394\PhpParser\Node\Scalar\MagicConst
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
