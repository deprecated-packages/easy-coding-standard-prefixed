<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf53473b45c36\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperf53473b45c36\PhpParser\Node\Scalar\MagicConst
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
