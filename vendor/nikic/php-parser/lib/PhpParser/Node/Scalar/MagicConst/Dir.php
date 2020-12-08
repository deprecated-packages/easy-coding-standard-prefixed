<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperf053e888b664\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperf053e888b664\PhpParser\Node\Scalar\MagicConst
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
