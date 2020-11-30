<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper246d7c16d32f\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper246d7c16d32f\PhpParser\Node\Scalar\MagicConst
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
