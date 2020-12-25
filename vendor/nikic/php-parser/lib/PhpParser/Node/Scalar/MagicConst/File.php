<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper92597f5b42a7\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper92597f5b42a7\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__FILE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_File';
    }
}
