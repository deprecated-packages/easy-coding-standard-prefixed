<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperc75fd40d7a6e\PhpParser\Node\Scalar\MagicConst
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
