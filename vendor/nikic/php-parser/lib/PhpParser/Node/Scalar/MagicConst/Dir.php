<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperba5852cc6147\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperba5852cc6147\PhpParser\Node\Scalar\MagicConst
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
