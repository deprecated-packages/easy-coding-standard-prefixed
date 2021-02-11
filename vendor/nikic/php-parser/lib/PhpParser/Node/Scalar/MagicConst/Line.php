<?php

declare (strict_types=1);
namespace _PhpScoperef5048aa2573\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperef5048aa2573\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperef5048aa2573\PhpParser\Node\Scalar\MagicConst
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
