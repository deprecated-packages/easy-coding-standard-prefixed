<?php

declare (strict_types=1);
namespace _PhpScoper56c9df53a081\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper56c9df53a081\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper56c9df53a081\PhpParser\Node\Scalar\MagicConst
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
