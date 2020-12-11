<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc7c7dddc9238\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperc7c7dddc9238\PhpParser\Node\Scalar\MagicConst
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
