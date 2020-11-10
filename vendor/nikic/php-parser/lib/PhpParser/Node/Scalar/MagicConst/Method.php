<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper48800f361566\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoper48800f361566\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__METHOD__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Method';
    }
}
