<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\MagicConst
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
