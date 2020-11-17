<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst;
class Dir extends \_PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__DIR__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Dir';
    }
}
