<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
