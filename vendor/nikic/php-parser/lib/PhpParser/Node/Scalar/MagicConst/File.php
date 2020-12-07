<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\Node\Scalar\MagicConst;

use _PhpScopereb8678af2407\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopereb8678af2407\PhpParser\Node\Scalar\MagicConst
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
