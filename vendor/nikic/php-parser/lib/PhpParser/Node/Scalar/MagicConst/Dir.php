<?php

declare (strict_types=1);
namespace _PhpScoper2d2a405cc0f8\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper2d2a405cc0f8\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoper2d2a405cc0f8\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__DIR__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Dir';
    }
}
