<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc8fea59b0cb1\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperc8fea59b0cb1\PhpParser\Node\Scalar\MagicConst
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
