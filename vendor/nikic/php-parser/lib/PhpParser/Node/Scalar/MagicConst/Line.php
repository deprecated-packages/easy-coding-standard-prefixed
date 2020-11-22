<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\MagicConst
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
