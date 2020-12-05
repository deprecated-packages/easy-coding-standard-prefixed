<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbaf90856897c\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperbaf90856897c\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__METHOD__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Method';
    }
}
