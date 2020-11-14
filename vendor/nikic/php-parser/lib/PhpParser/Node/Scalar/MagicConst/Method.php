<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst
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
