<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst
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
