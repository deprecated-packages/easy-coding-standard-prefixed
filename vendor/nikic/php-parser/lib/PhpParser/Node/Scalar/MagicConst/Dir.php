<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf77bffce0320\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperf77bffce0320\PhpParser\Node\Scalar\MagicConst
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
