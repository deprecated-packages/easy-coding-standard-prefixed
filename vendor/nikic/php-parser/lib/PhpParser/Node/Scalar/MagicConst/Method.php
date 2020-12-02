<?php

declare (strict_types=1);
namespace _PhpScoperf62d28230928\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf62d28230928\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperf62d28230928\PhpParser\Node\Scalar\MagicConst
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
