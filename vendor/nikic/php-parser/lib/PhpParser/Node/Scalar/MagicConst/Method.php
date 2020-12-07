<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperfa521053d812\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperfa521053d812\PhpParser\Node\Scalar\MagicConst
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
