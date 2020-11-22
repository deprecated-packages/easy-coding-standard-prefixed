<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperac4e86be08e5\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperac4e86be08e5\PhpParser\Node\Scalar\MagicConst
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
