<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Scalar\MagicConst
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
