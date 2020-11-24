<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst
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
