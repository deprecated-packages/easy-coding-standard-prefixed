<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\MagicConst
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
