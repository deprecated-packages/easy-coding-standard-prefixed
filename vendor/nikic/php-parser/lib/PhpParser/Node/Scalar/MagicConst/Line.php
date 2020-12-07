<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst
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
