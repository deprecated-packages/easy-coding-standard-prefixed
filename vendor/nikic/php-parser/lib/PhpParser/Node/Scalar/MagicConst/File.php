<?php

declare (strict_types=1);
namespace _PhpScoper59da9ac954a6\PhpParser\Node\Scalar\MagicConst;

use _PhpScoper59da9ac954a6\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoper59da9ac954a6\PhpParser\Node\Scalar\MagicConst
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
