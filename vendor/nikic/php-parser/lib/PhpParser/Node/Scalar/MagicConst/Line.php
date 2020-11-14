<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst
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
