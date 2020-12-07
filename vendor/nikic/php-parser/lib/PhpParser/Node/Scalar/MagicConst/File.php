<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperb83706991c7f\PhpParser\Node\Scalar\MagicConst
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
