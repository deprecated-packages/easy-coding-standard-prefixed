<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperd1a5bf00e83e\PhpParser\Node\Scalar\MagicConst;
class Line extends \_PhpScoperd1a5bf00e83e\PhpParser\Node\Scalar\MagicConst
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
