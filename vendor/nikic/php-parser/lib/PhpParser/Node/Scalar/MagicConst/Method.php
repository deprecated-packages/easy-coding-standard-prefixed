<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\MagicConst
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
