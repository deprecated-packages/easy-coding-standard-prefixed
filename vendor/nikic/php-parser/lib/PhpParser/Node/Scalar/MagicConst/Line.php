<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper167729fa1dde\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoper167729fa1dde\PhpParser\Node\Scalar\MagicConst
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
