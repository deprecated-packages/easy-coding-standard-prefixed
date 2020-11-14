<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Node\Scalar\MagicConst;

use _PhpScopercda2b863d098\PhpParser\Node\Scalar\MagicConst;
class File extends \_PhpScopercda2b863d098\PhpParser\Node\Scalar\MagicConst
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
