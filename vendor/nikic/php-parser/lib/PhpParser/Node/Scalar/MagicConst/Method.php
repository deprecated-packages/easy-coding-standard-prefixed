<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb44a315fec16\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperb44a315fec16\PhpParser\Node\Scalar\MagicConst
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
