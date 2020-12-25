<?php

declare (strict_types=1);
namespace _PhpScoper592524ba34f0\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper592524ba34f0\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper592524ba34f0\PhpParser\Node\Scalar\MagicConst
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
