<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst
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
