<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf7b66f9e3817\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperf7b66f9e3817\PhpParser\Node\Scalar\MagicConst
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
