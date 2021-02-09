<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper807f8e74693b\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper807f8e74693b\PhpParser\Node\Scalar\MagicConst
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
